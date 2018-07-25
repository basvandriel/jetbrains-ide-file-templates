# jetbrains-ide-file-templates
This repository contains file templates for JetBrains IDEs for better formatting 
of documentation. This also helps for faster programming.

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
and go to `File > Import Settings...` and select and import the previous generated `settings.jar` file.

To use the file templates open your project and
go to `File > Settings > Editor > File and Code templates` and navigate to the `Includes` tab.
 
In here open the `author-variables.vtl` file and change the
`$AUTHOR_NAME` and `$AUTHOR_EMAIL` to the corresponding name and email address.

```shell
## Author variables
##
## Author's full name
#set($AUTHOR_NAME = "Bas van Driel")
##
## Author's email address
#set($AUTHOR_EMAIL = "basvandriel94@gmail.com")
```
---
You can also add a project license, homepage and a GitHub link to the variables. None of these are required.

### Project license
By default, the project license is set to the MIT license. You can change this by opening
up the `license-variable` file and changing `the $PROJECT_LICENSE` variable to the desired project license.
 
The supported licenses are currently:
* MIT
* The Unlicensed

### Home page link
Add the following lines to the `variables.vtl `file:
```shell
## Home page link
#set($PROJECT_HOMEPAGE = "")
```
Afterwards add the project home page name between the `""`.

### GitHub link
Add the following lines to the `variables.vtl `file:
```shell
## GitHub link
#set($PROJECT_GITHUB = "")
```
Afterwards add the project home page name between the `""`.

## License
This project is licensed under the The Unlicensed - see the [LICENSE.md](LICENSE.md) file for details.

## Links
* [Source code](https://github.com/basvandriel/jetbrains-ide-file-templates)
* [Issue tracker](https://github.com/basvandriel/jetbrains-ide-file-templates/issues)
