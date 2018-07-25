<?php
## Variables to parse
#parse("variables.vtl")
##
## License information and description
#if(${PROJECT_LICENSE} != "")
#parse("LICENSE-INFO-${PROJECT_LICENSE}.vtl")
#end
##
## Empty line to seperate with the PHP file header

## File header
#parse("PHP File Header.php")