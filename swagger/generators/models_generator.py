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
        self.path = os.path.join(settings.BASE_PATH, 'Models')
        if not os.path.exists(self.path):
            os.makedirs(self.path)

    def generate(self):
        for key in self.definitions:
            nm, model_file = self.get_model_names(key)
            model = ModelGenerator(key, model_file, self.definitions)
            model.generate()

    def get_model_names(self, key):
        model_file = os.path.join(self.path, key + '.php')
        return (key, model_file)
