all: clean install

clean:
	# Delete a previous generated file if it exists
	if [ -a settings.jar ] ; \
    then \
         rm settings.jar ; \
    fi;

install:
	# Put the needed files in a zip file
	zip -r "settings.zip" fileTemplates/ installed.txt 'IntelliJ IDEA Global Settings'

	# Rename it to a .jar file
	mv "settings.zip" "settings.jar"