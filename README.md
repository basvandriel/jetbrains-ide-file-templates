# jetbrains-ide-file-templates


## Requirements

* The unix `make` tool
* The unix `zip` tool
* Composer

## Installation

Checkout the repository to any directory on your computer and run the make file.
This will create a compressed `settings.jar` file in the directory where the repository was cloned to.

```shell
# Clones the repository
git clone https://github.com/basvandriel/jetbrains-ide-file-templates.git

# Builds the MAKEFILE
make
```

Afterwards open one of the supported JetBrains IDEs
and go to `File > Import Settings...` and select the previous generated `settings.jar` file.

To use the file templates...
 
`author-variables.vtl` file
```shell
# Author's name copyright
#set($PROJECT_COPYRIGHT = $PROJECT_NAME)
```

`<projectname>-variables.vtl` file

```shell
## <projectname> variables
##
## Project copyright
#set($PROJECT_COPYRIGHT = $PROJECT_NAME)
```

You can add can add a project license, homepage and GitHub link to the variables.

### Project license
Add the following lines to the project variables file:
```shell
##
## Project license
#set($PROJECT_LICENSE = "")
```
Add the license name between the `""`.
 
The supported licenses are currently:
* MIT

If license is not supported you want, go to `File > Settings > Editor > File and Code templates` and navigate to the `Includes` tab.

Afterwards add a `.vtl` file with the name of the license followed by `-license`. Inside the file, add the following lines
```
## License
## 
#set($LICENSE_NAME = "")
#set($LICENSE_URL = "")
```

After these lines add the license text itself.
## License

This project is licensed under the The Unlicensed - see the [LICENSE.md](LICENSE.md) file for details.

## Links
* [Source code](https://github.com/basvandriel/jetbrains-ide-file-templates)
* [Issue tracker](https://github.com/basvandriel/jetbrains-ide-file-templates/issues)
