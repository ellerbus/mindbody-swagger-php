import settings
import json
import strutils
import textwrap

import os


class MigrationGenerator(object):

    def __init__(self, key, file_name, definitions):
        self.name = 'MindBody' + strutils.pascal_case(key)
        self.table = 'mindbody_' + strutils.snake_case(key)
        self.file_name = file_name
        self.definition = definitions[key]
        self.definitions = definitions
        if os.path.exists(file_name):
            os.remove(file_name)

    def generate(self):
        with open(self.file_name, 'w') as file:
            file.write(f'<?php\n\n')
            file.write(f'use Illuminate\\Database\\Migrations\\Migration;\n')
            file.write(f'use Illuminate\\Database\\Schema\\Blueprint;\n')
            file.write(f'use Illuminate\\Support\\Facades\\Schema;\n')
            file.write(f'\n')
            file.write(f'class {self.name} extends Migration\n')
            file.write(f'{{\n')
            self.up(file)
            self.down(file)
            file.write(f'}}\n')

    def up(self, file):
        schema = f"\t\tSchema::create('{self.table}', function (Blueprint $table)\n"

        file.write(f'\t/**\n')
        file.write(f'\t * Run the migrations.\n')
        file.write(f'\t *\n')
        file.write(f'\t * @return void\n')
        file.write(f'\t */\n')
        file.write(f'\tpublic function up()\n')
        file.write(f'\t{{\n')
        file.write(schema)
        file.write(f'\t\t{{\n')
        file.write(f"\t\t\t$table->charset = 'utf8mb4';\n")
        file.write(f"\t\t\t$table->collation = 'utf8mb4_unicode_ci';\n")
        file.write(f'\n')
        self.write_columns(file)
        file.write(f'\t\t}});\n')
        file.write(f'\t}}\n')

    def write_columns(self, file):
        file.write(f"\t\t\t$table->integer('organization_id');\n")
        if 'properties' in self.definition:
            properties = self.definition['properties']
            for key in properties:
                name = strutils.snake_case(key)
                typename = 'string'
                format = ''
                if 'format' in properties[key]:
                    format = properties[key]['format']
                if 'type' in properties[key]:
                    typename = properties[key]['type']
                elif '$ref' in properties[key]:
                    typename = properties[key]['$ref']
                    typename = 'FK ' + typename.split('/')[-1]
                if typename == 'array':
                    if '$ref' in properties[key]['items']:
                        ref = properties[key]['items']['$ref']
                        typename = 'FK ' + ref.split('/')[-1] + '[]'
                    elif 'type' in properties[key]['items']:
                        ref = properties[key]['items']['type']
                        typename = 'FK ' + ref.split('/')[-1] + '[]'

                if format == 'date-time':
                    typename = 'dateTimeTz'

                if typename == 'string':
                    file.write(f"\t\t\t$table->{typename}('{name}', 50);\n")
                elif typename == 'number':
                    file.write(f"\t\t\t$table->double('{name}');\n")
                else:
                    file.write(f"\t\t\t$table->{typename}('{name}');\n")
        file.write(f'\n')
        file.write(f"\t\t\t$table->timestamps();\n")
        file.write(f"\t\t\t$table->softDeletes('deleted_at');\n\n")
        file.write(f"\t\t\t$keys = ['organization_id', 'id'];\n\n")
        file.write(f"\t\t\t$table->primary($keys);\n")

    def down(self, file):
        schema = f"\t\tSchema::dropIfExists('{self.table}');\n"

        file.write(f'\n')
        file.write(f'\t/**\n')
        file.write(f'\t * Reverse the migrations.\n')
        file.write(f'\t *\n')
        file.write(f'\t * @return void\n')
        file.write(f'\t */\n')
        file.write(f'\tpublic function down()\n')
        file.write(f'\t{{\n')
        file.write(schema)
        file.write(f'\t}}\n')

    # # def write_references(self, file):
    # #     #   find all referenced objects
    # #     # "properties": {
    # #     #         "User": {
    # #     #             "$ref": "#/definitions/User",
    # #     #             "description": "Contains information about the user represented by the access token."
    # #     #         }
    # #     #     }
    # #     properties = self.definition['properties']
    # #     for key in properties:
    # #         prop = properties[key]
    # #         if '$ref' in prop:
    # #             parts = prop['$ref'].split('/')
    # #             name = parts[-1]
    # #             file_name = strutils.snake_case(name)
    # #         elif prop['type'] == 'array' and '$ref' in prop['items']:
    # #             parts = prop['items']['$ref'].split('/')
    # #             name = parts[-1]
    # #             file_name = strutils.snake_case(name)
    # #             file.write(f'from .{file_name} import {name}\n')
    # #     file.write('\n')

    # def write_constructor(self, file):
    #     if 'required' in self.definition:
    #         required = self.definition['required']
    #         names = list(map(lambda x: strutils.camel_case(x), required))
    #         parms = list(map(lambda x: '$' + strutils.camel_case(x), names))
    #         parameters = ', '.join(parms)
    #         file.write(f'\t/**\n')
    #         file.write(f'\t * Constructor\n')
    #         file.write(f'\t */\n')
    #         file.write(f'\tpublic function __construct({parameters})\n')
    #         file.write(f'\t{{\n')
    #         for name in names:
    #             file.write(f'\t\t$this->{name} = ${name};\n')
    #         file.write(f'\t}}\n')

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
    #     file.write(f'\n\tprotected function getInputMap()\n')
    #     file.write(f'\t{{\n')
    #     file.write(f'\t\treturn [\n')
    #     properties = self.definition['properties']
    #     for key in properties:
    #         prop = properties[key]
    #         name = strutils.camel_case(key)
    #         tname, fname = self.get_types(key, prop)
    #         file.write(f"\t\t\t'{key}' => ['{name}', {tname}, {fname}],\n")
    #     file.write(f'\t\t\t];\n')
    #     file.write(f'\t}}\n')

    # def write_output_map(self, file):
    #     file.write(f'\n\tprotected function getOutputMap()\n')
    #     file.write(f'\t{{\n')
    #     file.write(f'\t\treturn [\n')
    #     properties = self.definition['properties']
    #     for key in properties:
    #         prop = properties[key]
    #         name = strutils.camel_case(key)
    #         tname, fname = self.get_types(key, prop)
    #         file.write(f"\t\t\t'{name}' => ['{key}', {tname}, {fname}],\n")
    #     file.write(f'\t\t\t];\n')
    #     file.write(f'\t}}\n')

    # def get_types(self, key, prop):
    #     tname = 'null'
    #     fname = 'null'

    #     if '$ref' in prop:
    #         parts = prop['$ref'].split('/')
    #         tname = parts[-1]+'::class'
    #     elif prop['type'] == 'array' and '$ref' in prop['items']:
    #         parts = prop['items']['$ref'].split('/')
    #         tname = 'array'
    #         fname = parts[-1]+'::class'
    #     else:
    #         tname = prop['type']

    #     if 'format' in prop:
    #         fname = prop['format']

    #     if tname != 'null':
    #         if '::class' not in tname:
    #             tname = f"'{tname}'"

    #     if fname != 'null':
    #         if '::class' not in fname:
    #             fname = f"'{fname}'"

    #     return (tname, fname)
    # # def write_attributes(self, file):
    # #     file.write(f'\n\n')
    # #     properties = self.definition['properties']
    # #     for key in properties:
    # #         prop = properties[key]
    # #         name = strutils.snake_case(key)
    # #         file.write(f"\t{name} = None\n")
    # #     file.write(f'\n')
