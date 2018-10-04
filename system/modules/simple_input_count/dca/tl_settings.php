<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2015 Leo Feyer
 *
 * @package   myInputCount
 * @author    Frank Thonak
 * @license   MIT/GPL
 * @copyright Frank Thonak
 */


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{simple_input_count_legend:hide},simple_input_count_data';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['simple_input_count_data'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_settings']['simple_input_count_data'],
	'inputType'			=> 'textarea',
	'eval'              		=> array 'rte'=>'ace|html')
);
