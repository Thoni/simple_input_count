<?php

 /**
  * Namespace
  */
//namespace Thoni;

if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Class myInputCount
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Frank Thonak www.thomkit.de
 * @author     Frank Thonak
 * @package    myInputCount
 */


class myInputCount extends \System
{
	public function addScript($strBuffer, $strTemplate)
	{
	    if ($strTemplate == 'be_main')
	    {

			$addValue = "		<script>
			var sic_vars = new Array();";


			$mySettings = explode("###br###",$GLOBALS['TL_CONFIG']['simple_input_count_data']);
			$myIndex = 0;
			foreach ($mySettings AS $mySetting)
			{
				$myData = explode(",",$mySetting);
				$addValue .= "sic_vars[$myIndex] = new Array('$myData[0]',$myData[1],$myData[2]);";
				$myIndex++;
			}
			$addValue .= "

			var sic_lang = new Array();
			sic_lang['siclength'] = new Array('".$GLOBALS['TL_LANG']['MOD']['sic_length'][0]."','".$GLOBALS['TL_LANG']['MOD']['sic_length'][1]."');
			sic_lang['actsiclength'] = new Array('".$GLOBALS['TL_LANG']['MOD']['sic_actlength'][0]."','".$GLOBALS['TL_LANG']['MOD']['sic_actlength'][1]."');

			</script>";
	    }
	    return str_replace("</head>",$addValue."</head>",$strBuffer);
	}

	 public function saveCallback($varValue, DataContainer $dc){
	 		return str_replace(' ','',str_replace("\n","###br###",$varValue));
	 }

	 public function loadCallback($varValue, DataContainer $dc){
	 		return str_replace("###br###","\n",$varValue);
	 }

}
?>
