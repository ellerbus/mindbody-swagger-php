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
        self.path = os.path.join(settings.BASE_PATH, 'Apis')
        if not os.path.exists(self.path):
            os.makedirs(self.path)

    def generate(self):
        self.generate_package()
        for _, api in self.apis.items():
            api.generate()

    def generate_package(self):
        for key in self.paths:
            api = self.get_api(key)
            path = self.paths[key]
            name = key.split('/')[-1]
            for method in path:
                api.methods.append(MethodGenerator(path, method, name))

    def get_api(self, key):
        segments = key.split('/')
        name = segments[-2]
        if name in self.apis:
            return self.apis[name]
        api = ApiGenerator(self.path, segments)
        self.apis[name] = api
        return api
