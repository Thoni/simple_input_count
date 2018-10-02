
jQuery(document).ready(function(){
	function sic_check (oid){
		if( jQuery('#'+oid).length )
		{
			var textVal = jQuery('#'+oid).val();
		    if(textVal.length >= sic_check[oid][1] && textVal.length <= sic_check[oid][2])
		    {
				 jQuery('#'+oid).addClass('sic_green');
				 jQuery('#'+oid).removeClass('sic_red');
			} else {
				 jQuery('#'+oid).addClass('sic_red');
				 jQuery('#'+oid).removeClass('sic_green');
			}
		}


	}

	function sic_settip (oid)
	{
		var textVal = jQuery('#'+oid).val();
		var tipText = sic_lang["siclength"][0]+sic_check[oid][1]+" - "+sic_check[oid][2]+sic_lang["siclength"][1];
		tipText += "<br>"+sic_lang["actsiclength"][0]+textVal.length+sic_lang["actsiclength"][1];
		jQuery('#'+oid+".showsictip").css("content",tipText);
		sic_check(oid);
	}

	sic_vars.forEach(function(item) {
    	sic_check(item[0]);
    	jQuery('#'+item[0]).focus(function(){
			jQuery('#'+item[0]).addClass("showsictip");
			sic_settip(item[0]);
		}
    	jQuery('#'+item[0]).blur(function(){
			jQuery('#'+item[0]).removeClass("showsictip");
		}
    	jQuery('#'+item[0]).keyup(function(){
			sic_settip(item[0]);
		}
	});

}
