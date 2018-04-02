Code sniffer
============

.. _psr-2: https://www.php-fig.org/psr/psr-2/

Purpose
-------
A code sniffer can detect inconsistencies in the source code and enforces the psr-2_ standard. This template uses https://github.com/squizlabs/PHP_CodeSniffer which comes with a handy tool to automatically fix any violations of the psr-2_ standard.

Getting started
---------------
Composer has been configured to run the code sniffer with the psr-2_ standard:

.. code-block:: bash

    composer run code-sniffer

    > ./vendor/bin/phpcs --standard=PSR2 src

    FILE: /app/src/TFarla/ComposerTemplate/Example.php
    ----------------------------------------------------------------------
    FOUND 1 ERROR AFFECTING 1 LINE
    ----------------------------------------------------------------------
    2 | ERROR | [x] There must be one blank line after the namespace
      |       |     declaration
    ----------------------------------------------------------------------
    PHPCBF CAN FIX THE 1 MARKED SNIFF VIOLATIONS AUTOMATICALLY
    ----------------------------------------------------------------------

    Time: 353ms; Memory: 6Mb

    Script ./vendor/bin/phpcs --standard=PSR2 src handling the code-sniffer event returned with error code 2

There's a violation in our code. Composer has also been configured to execute the code sniffer fixer called PHPCBF. Execute the following command:

.. code-block:: bash

    composer run code-sniffer fix

    > ./vendor/bin/phpcbf --standard=PSR2 src

    PHPCBF RESULT SUMMARY
    ----------------------------------------------------------------------
    FILE                                                  FIXED  REMAINING
    ----------------------------------------------------------------------
    /app/src/TFarla/ComposerTemplate/Example.php          1      0
    ----------------------------------------------------------------------
    A TOTAL OF 1 ERROR WERE FIXED IN 1 FILE
    ----------------------------------------------------------------------

    Time: 335ms; Memory: 6Mb

When we run the code sniffer again. It should not report any violations:

.. code-block:: bash

    composer run code-sniffer

    > ./vendor/bin/phpcs --standard=PSR2 src

The source code is now psr-2_ compliant