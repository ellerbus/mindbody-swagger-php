import settings
import json
import strutils
import textwrap

import os


class ModelGenerator(object):

    def __init__(self, key, file_name, definitions):
        self.name = key
        self.file_name = file_name
        self.definition = definitions[key]
        self.definitions = definitions
        if os.path.exists(file_name):
            os.remove(file_name)

    def generate(self):
        with open(self.file_name, 'w') as file:
            self.write_header(file)
            self.write_class_definition(file)
            self.write_attribute_maps(file)
            self.write_constructor(file)

    def write_header(self, file):
        file.write(f'from .base_model import BaseModel\n\n')
        self.write_references(file)

    def write_class_definition(self, file):
        file.write(f'class {self.name}(BaseModel):\n')
        self.write_class_description(file)

    def write_class_description(self, file):
        descr = self.get_description()
        file.write(f'\t"""\n')
        for x in textwrap.wrap(descr):
            file.write(f'\t{x}\n')
        file.write(f'\n')
        if 'properties' in self.definition:
            file.write(f'\tAttributes:\n')
            properties = self.definition['properties']
            for key in properties:
                name = strutils.snake_case(key)
                descr = 'no description available'
                if 'description' in properties[key]:
                    descr = properties[key]['description']
                    file.write(f'\n\t\t{name}\n')
                    for x in textwrap.wrap(descr):
                        file.write(f'\t\t{x}\n')
        file.write(f'\t"""\n')
        file.write(f'\n')

    def get_description(self):
        descr = 'no description available'
        if 'description' in self.definition:
            descr = self.definition['description']
        return descr

    def write_references(self, file):
        #   find all referenced objects
        # "properties": {
        #         "User": {
        #             "$ref": "#/definitions/User",
        #             "description": "Contains information about the user represented by the access token."
        #         }
        #     }
        properties = self.definition['properties']
        for key in properties:
            prop = properties[key]
            if '$ref' in prop:
                parts = prop['$ref'].split('/')
                name = parts[-1]
                file_name = strutils.snake_case(name)
                file.write(f'from .{file_name} import {name}\n')
        file.write('\n')

    def write_constructor(self, file):
        if 'required' in self.definition:
            required = self.definition['required']
            names = list(map(lambda x: strutils.snake_case(x), required))
            parameters = ', '.join(names)
            file.write(f'\tdef __init__(self, {parameters}):\n')
            for name in names:
                file.write(f'\t\tself.{name} = {name}\n')

    def write_attribute_maps(self, file):
        # "properties": {
        #     "Test": {
        #         "description": "When `true`, indicates that the contents of the cart are validated, but the transaction does not take place. You should use this parameter during testing and when checking the calculated totals of the items in the cart.<br />\r\nWhen `false`, the transaction takes place and the database is affected.<br />\r\nDefault: **false**",
        #         "type": "boolean"
        #     },
        #     "Items": {
        #         "description": "A list of the items in the cart.",
        #         "type": "array",
        #         "items": {
        #             "$ref": "#/definitions/CheckoutItemWrapper"
        #         }
        #     },
        self.write_input_map(file)
        self.write_output_map(file)

    def write_input_map(self, file):
        file.write(f'\tinput_map = {{\n')
        properties = self.definition['properties']
        for key in properties:
            prop = properties[key]
            name = strutils.snake_case(key)
            if '$ref' in prop:
                file.write(f"\t\t\'{key}': ('{name}', {key})\n")
            else:
                file.write(f"\t\t'{key}': '{name}',\n")
        file.write(f'\t\t}}\n')
        file.write(f'\n')

    def write_output_map(self, file):
        file.write(f'\toutput_map = {{\n')
        properties = self.definition['properties']
        for key in properties:
            name = strutils.snake_case(key)
            file.write(f"\t\t'{name}': '{key}',\n")
        file.write(f'\t\t}}')
