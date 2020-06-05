import settings
import json
import strutils
import textwrap

import os

from .model_generator import ModelGenerator


class ModelsGenerator(object):
    def __init__(self):
        '''
        create the models folder
        '''
        self.definitions = settings.SWAGGER_OBJECT['definitions']
        self.path = os.path.join(settings.BASE_PATH, 'models')
        if not os.path.exists(self.path):
            os.makedirs(self.path)

    def generate(self):
        package = os.path.join(self.path, '__init__.py')
        with open(package, 'w') as file:
            for key in self.definitions:
                nm, model_file = self.get_model_names(key)
                file.write(f'from .{nm} import {key}\n')
                model = ModelGenerator(key, model_file, self.definitions)
                model.generate()

    def get_model_names(self, key):
        nm = strutils.snake_case(key)
        model_file = os.path.join(self.path, nm + '.py')
        return (nm, model_file)

    # def write_constructor(self, file,  definition):
    #     if 'required' in definition:
    #         required = definition['required']
    #         names = list(map(lambda x: strutils.snake_case(x), required))
    #         parameters = ', '.join(names)
    #         file.write(f'\tdef __init__(self, {parameters}):\n')
    #         for name in names:
    #             file.write(f'\t\tself.{name} = {name}\n')
