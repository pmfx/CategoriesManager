# Deprecated

## Since Evolution CMS 1.3.x CategoriesManager is built-in into the system :)

# Categories Manager

MODX Evolution Categories Management Module.

![screenshot_1](http://image.prntscr.com/image/04a9825fdfa644d5b996d8f9ccaef0da.png)
![screenshot_2](http://image.prntscr.com/image/70f6f44ad4f845c09fd7d8f12c22e42d.png)

**Install**

Use Package Manager or install manually:

1 Copy files to assets/modules/catmanager

2 Create a new module

Set name to "Categories Manager" or another name you like.

3 Set Module-Code to

include_once MODX_BASE_PATH . 'assets/modules/catmanager/module.php';

4 Set module-configuration to

&check_db_table=Check DB-table;list;true,false;true;;Set to false if column *rank* already exist in categories table.

Switches:

check_db_table:

This module need a new column(rank) within the core-table categories
At the first run this column will set and every time you run the module
a check for existens of this additional column will performed.
So after the first run you can set this to false. To save the
database-request for checking.

5 Save module

Finish

**History**

- 2016-10-20 Make module compatible with MODX install script (pmfx)
- 2016-10-15 Some refactoring and styling (pmfx)
- 2009-11-10 Original v0.2.2-beta released by stefan

**Credits**

Module originaly created by stefan https://modx.com/extras/author/stefan
