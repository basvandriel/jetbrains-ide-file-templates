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
## Interface namespace
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end
##
## Empty line to seperate with the namespace

## Interface documentation
#parse("PHP Interface Doc Comment.php")
interface ${NAME} {

}