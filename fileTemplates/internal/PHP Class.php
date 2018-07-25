<?php
## Class namespace
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end
## Empty line to seperate with the namespace

## Default project license (legacy code)
#set($PROJECT_LICENSE = "")
## Variables to parse
#parse("variables.vtl")
## License information and description
#if(${PROJECT_LICENSE} != "")
#parse("LICENSE-INFO-${PROJECT_LICENSE}.vtl")
#end
## Class documentation
#parse("PHP Class Doc Comment.php")
class ${NAME} {

}