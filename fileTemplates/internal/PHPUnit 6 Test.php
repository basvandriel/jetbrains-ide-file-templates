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
##
#if (${TESTED_NAME} && ${NAMESPACE} && !${TESTED_NAMESPACE})
use ${TESTED_NAME};
#elseif (${TESTED_NAME} && ${TESTED_NAMESPACE} && ${NAMESPACE} != ${TESTED_NAMESPACE})
use ${TESTED_NAMESPACE}\\${TESTED_NAME};
#end
## Test class documentation
#parse("PHP Class Doc Comment.php")
class ${NAME} extends \PHPUnit\Framework\TestCase {

}
