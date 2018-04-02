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

Introduction
=============================================

.. toctree::
   :maxdepth: 2
   :caption: Contents:

Making development of composer libraries easy with this cloneable template which includes:

- continuous integration (travis-ci_)
- static analysis (phpstan_)
- mess detector (phpmd_)
- testing framework (phpunit_)
- php code sniffer which enforces the psr-2_ standard (phpcs_)
- composer configuration with psr-4_ autoloading
- a changelog (keepachangelog_)
- MIT license (not sure about what license you need? https://choosealicense.com/)

.. toctree::
   :maxdepth: 2
   :caption: Contents:

   mess-detector/README
   code-sniffer/README
   static-analysis/README
   documentation/README
   continuous-integration/README
