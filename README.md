# mindbody-swagger-php
Simple Swagger Code Generator

A stupid simple no nonsense code genertor. If you're looking for robustness don't have to mess-with-the-codeness, you should probably checkout: http://github.com/mindbody/API-Examples/tree/master/SDKs/PHP/ instead.

If you use this, the ReferencedClasses will need to be copied to your project and the 
namespaces fixed appropriately. This is NOT intended to work out of the box, developer
intervention is required. This is a ONE time slam the baseline code out there and customize.

|Parameter|Values|Description|
|---|---|---|
|output|string|Path to output resulting files to|
|templates|string|Generate which templates? (models,clients,sql)|

```
prompt:> php -f swagger.php

# only outputs sql
prompt:> php -f swagger.php output=../path templates[sql]=1
```
