import settings
import json
import strutils
import textwrap

import os


class MethodGenerator(object):
    def __init__(self, path, method, name):
        self.path = path
        self.method = method
        self.name = name
        self.method_name = self.path[self.method]['operationId'].split('_')[-1]
        self.parameters = self.path[self.method]['parameters']
        self.responses = self.path[self.method]['responses']
        self.has_request = False

    def write_references(self, file):
        for parm in self.parameters:
            if 'in' in parm:
                if parm['in'] == 'query':
                    self.has_request = True
                    request = self.method_name + '_request'
                    name = strutils.pascal_case(request)
                    file.write(f'use App\\MindBody\\Models\\{name};\n')
                    break

        for parm in self.parameters:
            if 'schema' in parm:
                self.has_request = True
                parts = parm['schema']['$ref'].split('/')
                name = parts[-1]
                file.write(f'use App\\MindBody\\Models\\{name};\n')

        if '200' in self.responses:
            if 'schema' in self.responses['200']:
                resp = self.responses['200']['schema']
                if '$ref' in resp:
                    parts = resp['$ref'].split('/')
                    name = parts[-1]
                    file.write(f'use App\\MindBody\\Models\\{name};\n')

    def write_method(self, file):
        descr = self.get_description()
        file.write(f'\t/**\n')
        for x in textwrap.wrap(descr):
            file.write(f'\t * {x}\n')
        file.write(f'\t */\n')
        names = []
        for parm in self.parameters:
            if parm['in'] == 'body' or parm['in'] == 'query':
                names.append('$request')
                break
        parms = ', '.join(names)
        file.write(f'\tpublic function {self.method_name}({parms})\n')
        file.write(f'\t{{\n')
        self.write_method_body(file)
        file.write(f'\t}}\n\n')
        # if self.method == 'get':
        #     self.write_get_method(file)
        # elif self.method == 'delete':
        #     self.write_delete_method(file)
        # elif self.method == 'post':
        #     self.write_post_method(file)
        # elif self.method == 'put':
        #     self.write_put_method(file)

    def write_get_method(self, file):
        pass

    def write_delete_method(self, file):
        pass

    def write_post_method(self, file):
        pass

    def write_put_method(self, file):
        pass

    def get_description(self):
        descr = 'no description available'
        if 'summary' in self.path[self.method]:
            descr = self.path[self.method]['summary']
        if 'description' in self.path[self.method]:
            descr = self.path[self.method]['description']
        return descr

    def write_method_body(self, file):
        file.write(f"\t\t$url = $this->getFullPath('{self.name}');\n")
        names = ['$url']
        names.append(self.get_request_parm())
        names.append(self.get_response_parm())
        parms = ', '.join(names)
        file.write(f'\n')
        file.write(f'\t\treturn $this->client->{self.method}({parms});\n')

    def get_request_parm(self):
        for parm in self.parameters:
            if parm['in'] == 'body' or parm['in'] == 'query':
                return '$request'
        return 'null'

    def get_response_parm(self):
        if '200' in self.responses:
            if 'schema' in self.responses['200']:
                resp = self.responses['200']['schema']
                if '$ref' in resp:
                    parts = resp['$ref'].split('/')
                    name = parts[-1]
                    return name + '::class'
        return 'null'


class ApiGenerator(object):
    def __init__(self, path, segments):
        self.methods = []
        self.segments = segments
        self.class_name = strutils.pascal_case(segments[-2]) + 'Api'
        self.file_name = os.path.join(path, self.class_name + '.php')
        if os.path.exists(self.file_name):
            os.remove(self.file_name)

    def generate(self):
        with open(self.file_name, 'w') as file:
            self.write_header(file)
            self.write_class_definition(file)

    def write_header(self, file):
        file.write(f'<?php\n\n')
        file.write(f'namespace App\\MindBody\\Apis;\n\n')
        for m in self.methods:
            m.write_references(file)
        file.write('\n')

    def write_class_definition(self, file):
        file.write(f'class {self.class_name} extends BaseApi\n')
        file.write(f'{{\n')
        self.write_constructor(file)
        for m in self.methods:
            m.write_method(file)
        file.write(f'}}\n')

    def write_constructor(self, file):
        api_segment = self.segments[-2]
        file.write(f'\t/**\n')
        file.write(f'\t * Constructor\n')
        file.write(f'\t */\n')
        file.write(f'\tpublic function __construct($siteId, $authorization)\n')
        file.write(f'\t{{\n')
        file.write(f"\t\tparent::__construct")
        file.write(f"('{api_segment}', $siteId, $authorization);\n")
        file.write(f'\t}}\n\n')

    # def write_attribute_maps(self, file):
    #     # "properties": {
    #     #     "Test": {
    #     #         "description": "When `true`, indicates that the contents of the cart are validated, but the transaction does not take place. You should use this parameter during testing and when checking the calculated totals of the items in the cart.<br />\r\nWhen `false`, the transaction takes place and the database is affected.<br />\r\nDefault: **false**",
    #     #         "type": "boolean"
    #     #     },
    #     #     "Items": {
    #     #         "description": "A list of the items in the cart.",
    #     #         "type": "array",
    #     #         "items": {
    #     #             "$ref": "#/definitions/CheckoutItemWrapper"
    #     #         }
    #     #     },
    #     self.write_input_map(file)
    #     self.write_output_map(file)

    # def write_input_map(self, file):
    #     file.write(f'\tinput_map = {{\n')
    #     properties = self.definition['properties']
    #     for key in properties:
    #         prop = properties[key]
    #         name = strutils.snake_case(key)
    #         if '$ref' in prop:
    #             file.write(f"\t\t\'{key}': ('{name}', {key})\n")
    #         else:
    #             file.write(f"\t\t'{key}': '{name}',\n")
    #     file.write(f'\t\t}}\n')
    #     file.write(f'\n')

    # def write_output_map(self, file):
    #     file.write(f'\toutput_map = {{\n')
    #     properties = self.definition['properties']
    #     for key in properties:
    #         name = strutils.snake_case(key)
    #         file.write(f"\t\t'{name}': '{key}',\n")
    #     file.write(f'\t\t}}')

    #     # def write_model(self, file_name, name, definition):
    #     #     with open(file_name, 'w') as file:
    #     #         self.write_header(file, name, definition)
    #     #         self.write_attribute_map(file,  definition)
    #     #         self.write_constructor(file, definition)

    #     # def write_header(self, file, name, definition):
    #     #     file.write(f'from .base_models import BaseModel\n')
    #     #     file.write(f'\n\n')
    #     #     descr = 'no description available'
    #     #     if 'description' in definition:
    #     #         descr = definition['description']
    #     #     file.write(f'class {name}(BaseModel):\n')
    #     #     file.write(f'\t"""\n')
    #     #     for x in textwrap.wrap(descr):
    #     #         file.write(f'\t{x}\n')
    #     #     file.write(f'\n')
    #     #     if 'properties' in definition:
    #     #         file.write(f'\tAttributes:\n')
    #     #         properties = definition['properties']
    #     #         for pkey in properties:
    #     #             pname = strutils.snake_case(pkey)
    #     #             pdescr = 'no description available'
    #     #             if 'description' in properties[pkey]:
    #     #                 pdescr = properties[pkey]['description']
    #     #             file.write(f'\n\t\t{pname}\n')
    #     #             for x in textwrap.wrap(pdescr):
    #     #                 file.write(f'\t\t{x}\n')
    #     #     file.write(f'\t"""\n')

    #     # def write_attribute_map(self, file, definition):
    #     #     file.write('\tattribute_map = {\n')
    #     #     if 'properties' in definition:
    #     #         properties = definition['properties']
    #     #         for pkey in properties:
    #     #             pname = strutils.snake_case(pkey)
    #     #             file.write(f'\t\t\'{pname}\': \'{pkey}\',\n')
    #     #     file.write('\t}\n')
