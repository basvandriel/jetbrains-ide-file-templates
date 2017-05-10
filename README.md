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

Afterwards create a `.vtl` file in the same folder with the exact same name as your project, followed by `-variables`. 
For example this could be `jetbrains-ide-file-templates-variables.vtl`. The `jetbrains-ide-file-templates` part would be the project name.

Then paste in the following content and replace `<projectname>` with your project name:

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
## Project license
#set($PROJECT_LICENSE = "")
```
Add the license name between the `""`.
 
The supported licenses are currently:
* The Unlicensed

If license is not supported you want, go to `File > Settings > Editor > File and Code templates`
and navigate to the `Includes` tab. 

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
