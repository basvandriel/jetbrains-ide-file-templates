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
## Empty line to seperate with the namespace

## Class documentation
#parse("PHP Class Doc Comment.php")
public class ${NAME} {

}