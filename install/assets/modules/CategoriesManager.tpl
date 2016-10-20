// <?php
/**
 * Categories Manager
 * 
 * Categories Management Module
 * 
 * @category	module
 * @version 	1.0.0
 * @license     http://creativecommons.org/licenses/GPL/2.0/ GNU Public License (GPL v2)
 * @internal	@properties	&check_db_table=Check DB-table;list;true,false;true;;Set to false if column *rank* already exist in categories table.
 * @internal	@guid catmanager435243542tf542t5t
 * @internal	@shareparams 1
 * @internal	@dependencies This module needs a new column (rank) within the core-table categories. At the first run this column will be created.
 * @internal	@modx_category Manager and Admin
 * @internal    @installset base
 * @reportissues https://github.com/pmfx/CategoriesManager
 * @link        Original stefan release https://modx.com/extras/package/modxcategoriesmanager
 * @author      stefan https://modx.com/extras/author/stefan
 * @author      pmfx https://github.com/pmfx
 * @lastupdate  20/10/2016
 */

include_once MODX_BASE_PATH . 'assets/modules/catmanager/module.php';