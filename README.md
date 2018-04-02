# Composer template

[![Packagist](https://img.shields.io/packagist/dt/TFarla/composer-template.svg?style=flat-square)](https://packagist.org/packages/tfarla/composer-template)
[![Travis](https://img.shields.io/travis/TFarla/composer-template.svg?style=flat-square)](https://travis-ci.org/TFarla/composer-template)
[![Coveralls github](https://img.shields.io/coveralls/github/TFarla/composer-template.svg?style=flat-square)](https://coveralls.io/github/TFarla/composer-template)
[![Read the Docs](https://img.shields.io/readthedocs/composer-template.svg?style=flat-square)](http://composer-template.readthedocs.io/en/latest/index.html)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square)](https://opensource.org/licenses/MIT)

Making development of composer libraries easy with this cloneable template which includes:

- continuous integration ([travis ci](https://travis-ci.org/))
- code coverage ([coveralls](https://coveralls.io/))
- static analysis ([phpstan](https://github.com/phpstan/phpstan))
- mess detector ([phpmd](https://phpmd.org/))
- testing framework ([phpunit](https://phpunit.de/))
- php code sniffer which enforces the [psr-2 standard](https://www.php-fig.org/psr/psr-2/) ([phpcs](https://github.com/squizlabs/PHP_CodeSniffer))
- composer configuration with [psr-4 autoloading](https://www.php-fig.org/psr/psr-4/)
- [a changelog](https://keepachangelog.com/en/1.0.0/)
- MIT license (not sure about what license you need? https://choosealicense.com/)
- documentation using [sphinx](http://www.sphinx-doc.org/en/master/)
- issue and pull request template
- badges from http://shields.io/

## Requirements
- php 7.1 or greater ([supported versions](http://php.net/supported-versions.php))
- python & pip to create documentation
- composer

## Installation

The following command will clone this template and place it in the `my-library` directory

```bash
composer create-project tfarla/composer-template my-library
```

Composer's [create-project](https://getcomposer.org/doc/03-cli.md#create-project) will also install all dependencies in this template:
```bash
Installing tfarla/composer-template (dev-master d3249c7ffef021c39e33a4323be4d70899d4d28b)
  - Installing tfarla/composer-template (dev-master master): Cloning master from cache
Created project in my-library
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Generating autoload files
ocramius/package-versions:  Generating version class...
ocramius/package-versions: ...done generating version class
```

Once the download is done you will get the choice to remove the `.git` directory which you should do if you want your own repository.

```bash
Do you want to remove the existing VCS (.git, .svn..) history? [Y,n]? y
```

## Usage
In order to use this template you'll need to change a few things:

- Change the content in this README file to reflect your library 
- Change the content in the `docs/` directory to reflect your library
- Setup [travis-ci](https://travis-ci.org/) (should be plug & play)
- Setup [readthedocs](https://readthedocs.org/) (should be plug & play)
- Setup [coveralls](https://coveralls.io/) (should be plug & play) 
- Pick a license https://choosealicense.com/ (MIT is good enough for most open source project, but you might want to look at the other options)

## Documentation
While this README should be enough to get started. Please read the [full documentation](http://composer-template.readthedocs.io/en/latest/index.html) for more details. 

## Contributing
Thanks for reading this far into the README and considering contributing to this project.
If you have any questions or suggestions feel free to create an issue.

If you want to modify the code then please follow these steps:

1. Fork it (https://github.com/TFarla/composer-template)
2. Create your feature branch (git checkout -b feature/fooBar)
3. Commit your changes (git commit -am 'Add some fooBar')
4. Push to the branch (git push origin feature/fooBar)
5. Create a new Pull Request