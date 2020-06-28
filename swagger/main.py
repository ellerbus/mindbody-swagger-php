from generators import ApisGenerator
from generators import ModelsGenerator

apis = ApisGenerator()

apis.generate()

models = ModelsGenerator()

models.generate()
