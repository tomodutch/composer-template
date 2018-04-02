Static analysis
===============

.. _phpstan: https://github.com/phpstan/phpstan

Purpose
-------
Static analysis is a tool which searches for bugs in th source code without executing the program.
This template uses phpstan_ which is a fast static analysis tool for php.

Getting started
---------------

Composer has been configured to run the phpstan command for you. Executing the following command:

.. code-block:: bash

    composer run static-analysis

.. code-block:: bash

    composer run static-analysis
    > vendor/bin/phpstan analyse src --level=0
    0/1 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%
    1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

    [OK] No errors

PHPstan found several errors on the following code:

.. code-block:: php

    <?php

    class Example
    {
        public function __construct(\DateTimeImmmutable $dateTime)
        {
            $this->dateTime = $dateTime;
        }
    }

.. code-block:: bash

    composer run static-analysis
    > vendor/bin/phpstan analyse src --level=0
     0/1 [░░░░░░░░░░░░░░░░░░░░░░░░░░░░]   0%
     1/1 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

     ------ ---------------------------------------------------------------------
     Line   src/TFarla/ComposerTemplate/Example.php
     ------ ---------------------------------------------------------------------
     11     Parameter $dateTime of method
              TFarla\ComposerTemplate\Example::__construct() has invalid typehint
              type DateTimeImmmutable.
     13     Access to an undefined property
              TFarla\ComposerTemplate\Example::$dateTime.
     ------ ---------------------------------------------------------------------

     [ERROR] Found 2 errors

     Script vendor/bin/phpstan analyse src --level=0 handling the static-analysis event returned with error code 1