import urllib
import datetime
import json


class BaseModel(object):
    input_map = {}
    output_map = {}

    def from_json(self, json_object):
        """
        Build from a JSON object
        """
        for key, mapped in self.input_map:
            if isinstance(mapped, tuple):
                #   map to object, then to attribute
                claz = mapped[1]
                item = claz()
                item.from_json(json_object[mapped])
                setattr(self, key, item)
            elif mapped in json_object:
                #   map to attribute
                setattr(self, key, json_object[mapped])

    def to_json(self):
        """
        Using sanitized data, build a JSON string
        """
        data = self.to_sanitized_data(self)

        return json.dumps(data)

    def to_querystring(self):
        """
        Using sanitized data, build a query string
        """
        data = self.to_sanitized_data(self)

        return urllib.parse.urlencode(data)

    def to_sanitized_data(self, value):
        """
        Builds a sanitized POST object.

        if value is None, return None.
        if value is str, int, long, float, bool, return directly.
        if value is datetime.datetime, datetime.date
            convert to string in iso8601 format.
        if value is list, sanitize each element in the list.
        if value is dict, return the dict.
        if value is swagger model, return the properties dict.

        :param value: The data to serialize.
        :return: The serialized form of data.
        """
        if isinstance(value, (bool, int, float, str)):
            return value

        if isinstance(value, list):
            return [self.to_sanitized_data(sub_obj) for sub_obj in value]

        if isinstance(value, tuple):
            return tuple(self.to_sanitized_data(sub_obj) for sub_obj in value)

        if isinstance(value, (datetime.datetime, datetime.date)):
            return value.isoformat()

        if isinstance(value, dict):
            obj_dict = value
        else:
            # Convert model value to dict except
            # attributes `swagger_types`, `output_map`
            # and attributes which value is not None.
            # Convert attribute name to json key in
            # model definition for request.
            obj_dict = {}
            for key, mapped in self.output_map.items():
                value = getattr(value, key)
                if value is not None:
                    obj_dict[mapped] = self.to_sanitized_data(value)

        return {key: self.to_sanitized_data(val) for key, val in obj_dict}
