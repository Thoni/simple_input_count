<?php

 /**
  * Namespace
  */
namespace Thoni;
use \Contao\System

if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Class myInputCount
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Frank Thonak www.thomkit.de
 * @author     Frank Thonak
 * @package    myInputCount
 */


class myInputCount extends System
{
	public function addScript($strBuffer, $strTemplate)
	{
	    if ($strTemplate == 'be_main')
	    {
	        // Modify output

			$addValue = "		<script>
			var sic_vars = array();";


			$mySettings = explode("\n",$GLOBALS['TL_CONFIG']['simple_input_count_data']);
			foreach ($mySettings AS $mySetting)
			{
				$myData = explode(",",$mySetting);
				if($myData[0] != "" && is_int($myData[1]) && is_int($myData[2])) $addValue .= "sic_vars[] = array('$myData[0]',$myData[1],$myData[2]);"
			}
			$addValue .= "			var sic_lang = array();
			sic_lang["length"] = array($GLOBALS['TL_LANG']['MOD']['sic_length'][0],$GLOBALS['TL_LANG']['MOD']['sic_length'][1]);
			sic_lang["actlength"] = array($GLOBALS['TL_LANG']['MOD']['sic_actlength'][0],$GLOBALS['TL_LANG']['MOD']['sic_actlength'][1]);
		</script>";
	    }
	    return $addValue.$strBuffer;
	}
}
?>
