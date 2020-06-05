import settings
import json
import strutils
import textwrap

import os

from .api_generator import ApiGenerator, MethodGenerator


class ApisGenerator(object):

    def __init__(self):
        '''
        create the apis folder
        '''
        self.apis = {}
        self.paths = settings.SWAGGER_OBJECT['paths']
        self.path = os.path.join(settings.BASE_PATH, 'apis')
        if not os.path.exists(self.path):
            os.makedirs(self.path)

    def generate(self):
        self.generate_package()
        for _, api in self.apis.items():
            api.generate()

    def generate_package(self):
        package = os.path.join(self.path, '__init__.py')
        with open(package, 'w') as file:
            for key in self.paths:
                api = self.get_api(key, file)
                path = self.paths[key]
                name = key.split('/')[-1]
                for method in path:
                    api.methods.append(MethodGenerator(path, method, name))

    def get_api(self, key, file):
        segments = key.split('/')
        name = segments[-2]
        if name in self.apis:
            return self.apis[name]

        #   update __init__
        api = ApiGenerator(self.path, segments)
        fnm = api.api_name
        cnm = api.class_name
        file.write(f'from .{fnm} import {cnm}\n')
        self.apis[name] = api
        return api
