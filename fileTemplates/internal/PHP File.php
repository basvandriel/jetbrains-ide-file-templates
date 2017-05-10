<?php
## Variables to parse
#parse("variables.vtl")
##
## Project license
#if(${PROJECT_LICENSE})
#parse("LICENSE-INFO-${PROJECT_LICENSE}.vtl")
#parse("LICENSE-DESCRIPTION-PHP-${PROJECT_LICENSE}.txt")
##
## Empty line under thisbefore file header

#end
##

#parse("PHP File Header.php")