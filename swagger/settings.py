import os
import json

BASE_PATH = os.path.dirname(os.path.realpath(__file__))

SWAGGER_FILE = os.path.join(BASE_PATH, 'swagger.json')


with open(SWAGGER_FILE, 'r') as file:
    SWAGGER_OBJECT = json.loads(file.read())
