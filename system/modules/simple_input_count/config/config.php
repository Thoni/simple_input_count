<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Frank Thonak www.thomkit.de
 * @author     Frank Thonak
 * @package    simple_input_count
 * @license    GPL
 * @filesource
 */

/*
 * -------------------------------------------------------------------------
 * Hooks
 * -------------------------------------------------------------------------
 *
 */

 $GLOBALS['TL_HOOKS']['parseBackendTemplate'][] = array('myInputCount', 'addScript');


/*
 * -------------------------------------------------------------------------
 * CSS
 * -------------------------------------------------------------------------
 *
 */

if (TL_MODE == 'BE') $GLOBALS['TL_CSS']['simple_input_count'] = '../system/modules/simple_input_count/assets/style/stylesheet.css';

/*
 * -------------------------------------------------------------------------
 * JS
 * -------------------------------------------------------------------------
 *
 */

if (TL_MODE == 'BE') $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.min.js';
if (TL_MODE == 'BE') $GLOBALS['TL_JAVASCRIPT']['simple_input_count'] = 'system/modules/simple_input_count/assets/script/script.js';


?>
