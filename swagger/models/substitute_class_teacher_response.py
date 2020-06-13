from .base_model import BaseModel

from .substitute_teacher_class import SubstituteTeacherClass

class SubstituteClassTeacherResponse(BaseModel):
	"""
	no description available

	Attributes:

		class
		Contains information about the class that is being assigned a
		substitute teacher.
	"""

	input_map = {
		'Class': ('class', Class),
		}

	output_map = {
		'class': 'Class',
		}

	class = None

