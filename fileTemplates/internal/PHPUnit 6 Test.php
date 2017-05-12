<?php
## Variables to parse
#parse("variables.vtl")
##
## License information and description
#if(${PROJECT_LICENSE})
#parse("LICENSE-INFO-${PROJECT_LICENSE}.vtl")
#parse("LICENSE-DESCRIPTION-PHP-${PROJECT_LICENSE}.txt")
#elseif(!${PROJECT_LICENSE})
## Empty line to seperate with the <?php sign

#end
##
## Class namespace
#if (${NAMESPACE})
namespace ${NAMESPACE};
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
