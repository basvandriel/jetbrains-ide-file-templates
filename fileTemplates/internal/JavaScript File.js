## Variables to parse
#parse("variables.vtl")
##
## License information and description
#if(${PROJECT_LICENSE} != "")
#parse("LICENSE-INFO-${PROJECT_LICENSE}.vtl")
#parse("LICENSE-DESCRIPTION-JS-${PROJECT_LICENSE}.txt")
## Empty lines to seperate with jshint enable


#end
##
## Turn on JSHINT
/* jshint browser:true */

##
#parse("JS Header.js")
## Empty line here

(function ${NAME}(window, document) {
    "use strict";
    
})(window, window.document);