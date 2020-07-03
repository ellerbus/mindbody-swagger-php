import settings
import json
import strutils
import textwrap

import os
import datetime
from .migration_generator import MigrationGenerator


class MigrationsGenerator(object):
    def __init__(self):
        '''
        create the models folder
        '''
        self.datetime = datetime.datetime(2020, 7, 3, 15, 0, 0)
        self.definitions = settings.SWAGGER_OBJECT['definitions']
        self.path = os.path.join(settings.BASE_PATH, 'Migrations')
        if not os.path.exists(self.path):
            os.makedirs(self.path)

    def generate(self):
        for key in self.definitions:
            nm, model_file = self.get_model_names(key)
            if not model_file.endswith('_request.php') and not model_file.endswith('_response.php'):
                migration = MigrationGenerator(
                    key, model_file, self.definitions)
                migration.generate()

    def get_model_names(self, key):
        self.datetime = self.datetime + datetime.timedelta(seconds=1)
        nm = self.datetime.strftime("%Y_%m_%d_%H%M%S_")
        name = 'mindbody_' + strutils.snake_case(key)
        model_file = os.path.join(self.path, nm + name + '.php')
        return (key, model_file)
