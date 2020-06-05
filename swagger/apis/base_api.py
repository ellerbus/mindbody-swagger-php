import json
from http.client import HTTPSConnection

from .rest_client import RestClient


class BaseApi(object):
    def __init__(self, segment, site_id, authorization):
        self.segment = segment
        self.site_id = site_id
        self.authorization = authorization
        self.client = RestClient()

    def get_fullpath(self, path):
        return self.segment + '/' + path
