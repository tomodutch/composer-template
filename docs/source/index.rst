.. Composer template documentation master file, created by
   sphinx-quickstart on Mon Apr  2 07:44:03 2018.
   You can adapt this file completely to your liking, but it should at least
   contain the root `toctree` directive.

.. _travis-ci: https://travis-ci.org/
.. _phpstan: https://github.com/phpstan/phpstan
.. _phpmd: https://phpmd.org/
.. _phpunit: https://phpunit.de/
.. _psr-2: https://www.php-fig.org/psr/psr-2/
.. _psr-4: https://www.php-fig.org/psr/psr-4/
.. _phpcs: https://github.com/squizlabs/PHP_CodeSniffer
.. _keepachangelog: https://keepachangelog.com/en/1.0.0/
.. _coveralls: https://coveralls.io/
.. _sphinx: http://www.sphinx-doc.org/en/master/
.. _readthedocs: https://readthedocs.org/

Introduction
=============================================

.. toctree::
   :maxdepth: 2
   :caption: Contents:

Making development of composer libraries easy with this cloneable template which includes:

- continuous integration (travis-ci_)
- code coverage (coveralls_)
- static analysis (phpstan_)
- mess detector (phpmd_)
- testing framework (phpunit_)
- php code sniffer which enforces the psr-2_ standard (phpcs_)
- composer configuration with psr-4_ autoloading
- a changelog (keepachangelog_)
- MIT license (not sure about what license you need? https://choosealicense.com/)
- documentation using sphinx_
- badges from http://shields.io/

Requirements
------------
- php 7.1 or greater ([supported versions](http://php.net/supported-versions.php))
- python & pip to create documentation
- composer

Installation
------------
The following command will clone this template and place it in the `my-library` directory

.. code-block:: bash

   composer create-project tfarla/composer-template my-library

Composer's [create-project](https://getcomposer.org/doc/03-cli.md#create-project) will also install all dependencies in this template:

.. code-block:: bash

   Installing tfarla/composer-template (dev-master d3249c7ffef021c39e33a4323be4d70899d4d28b)
   - Installing tfarla/composer-template (dev-master master): Cloning master from cache
   Created project in my-library
   Loading composer repositories with package information
   Installing dependencies (including require-dev) from lock file
   Generating autoload files
   ocramius/package-versions:  Generating version class...
   ocramius/package-versions: ...done generating version class

Once the download is done you will get the choice to remove the `.git` directory which you should do if you want your own repository.

.. code-block:: bash

   Do you want to remove the existing VCS (.git, .svn..) history? [Y,n]? y

Usage
-----
In order to use this template you'll need to change a few things:

- Change the content in this README file to reflect your library
- Change the content in the `docs/` directory to reflect your library
- Setup travis-ci_ (should be plug & play)
- Setup readthedocs_ (should be plug & play)
- Setup coveralls_ (should be plug & play)
- Pick a license https://choosealicense.com/ (MIT is good enough for most open source project, but you might want to look at the other options)

.. toctree::
   :maxdepth: 2
   :caption: Contents:

   mess-detector/README
   code-sniffer/README
   static-analysis/README
   documentation/README
   continuous-integration/README
