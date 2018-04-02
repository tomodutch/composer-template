Mess detector
=============

.. _phpmd: https://phpmd.org/
.. _rules: https://phpmd.org/rules/index.html
.. _cleancode: https://phpmd.org/rules/cleancode.html
.. _unusedcode: https://phpmd.org/rules/unusedcode.html
.. _codesize: https://phpmd.org/rules/codesize.html
.. _design: https://phpmd.org/rules/design.html
.. _naming: https://phpmd.org/rules/naming.html

Purpose
-------
A mess detector can be used to find find complex pieces of code and make them more simple. It's also a great tool to ensure a certain level of quality and make the library easier to maintain.
This template uses phpmd_ which is a mess detector library for php that contains a set of rules_ which are used on your source code.

Getting started
---------------

Composer has been configured to run phpmd by running the command:

.. code-block:: bash

    composer run mess-detector
    > vendor/bin/phpmd ./src text cleancode,unusedcode,codesize,design,naming
    ./src/TFarla/ComposerTemplate/Example.php:11	Avoid unused private fields such as '$a'.
    .//src/TFarla/ComposerTemplate/Example.php:11	Avoid variables with short names like $a. Configured minimum length is 3.
    Script vendor/bin/phpmd ./src text cleancode,unusedcode,codesize,design,naming handling the mess-detector event returned with error code 2

The `mess-detector` script uses the default configuration for the following rules:

- cleancode_
- unusedcode_
- codesize_
- design_
- naming_

It's also possible to create your own ruleset to have more control over the rules. This will allow you to create exceptions for specific violations when desired.
https://phpmd.org/documentation/writing-a-phpmd-rule.html