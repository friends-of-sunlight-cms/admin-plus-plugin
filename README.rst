Admin Plus
##########

Improves the administration user interface.

.. contents::
   :depth: 2

Requirements
************

- SunLight CMS 8.1

Installation
************

::

    Copy the folder 'plugins' and its contents to the root directory

or

::

    Installation via administration: 'Administration > Plugins > Upload new plugins'

Features
********

Administration
==============

Admin layout
^^^^^^^^^^^^
- Add submenu under main navigation

System settings
^^^^^^^^^^^^^^^
- Add highlighting (outline) of the selected system setting
- Add a button for configuration if the template supports it

Plugins list
^^^^^^^^^^^^
- Add filtering by plugin name

Edit-scripts improvements
^^^^^^^^^^^^^^^^^^^^^^^^^
- Adds new function buttons to page editscripts

Extend events
^^^^^^^^^^^^^

- ``admin-plus.submenu`` - args: module:string, &items:array
- ``admin-plus.buttonbox.before`` - args: admin:AdminState, new:bool, &button:array, &output:string
- ``admin-plus.buttonbox.after`` - args: admin:AdminState, &output:string
