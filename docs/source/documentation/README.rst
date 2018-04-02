Documentation
=============

Purpose
-------
All great projects need some form of documentation which communicates the intended purpose and implementation details of the project.
This template uses the sphinx project to build the documentation and the free online service https://readthedocs.org/ to host the documentation.

Getting started
---------------

All documentation can be found in the docs directory in the root of this template. It contains a directory structure which is similar to the table of contents located in the sidebar.

.. code-block:: bash

    .
    ├── Makefile
    ├── build
    ├── make.bat
    └── source
        ├── _static
        ├── _templates
        ├── code-sniffer
        │   └── README.rst
        ├── conf.py
        ├── continuous-integration
        │   └── README.rst
        ├── documentation
        │   └── README.rst
        ├── index.rst
        ├── mess-detector
        │   └── README.rst
        └── static-analysis
            └── README.rst

To modify the text on this page. Open the ``docs/source/documentation/README.rst`` file in your favourite editor and run the following command in the ``docs`` directory to compile the documentation to a static HTML website:

.. code-block:: bash

    make html
