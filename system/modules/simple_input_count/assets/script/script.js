jQuery.noConflict();


jQuery( document ).ready(function(){

	var sic_label = "";

	function sic_check (item){
		var myObj = jQuery(document.getElementById(item[0]));
		if( myObj.length )
		{
			var textVal = myObj.val();
			console.log(textVal.length);
			console.log(item[1]);
			console.log(item[2]);
		    if(textVal.length >= item[1] && textVal.length <= item[2])
		    {
				 myObj.addClass('sic_green');
				 myObj.removeClass('sic_red');
			} else {
				 myObj.addClass('sic_red');
				 myObj.removeClass('sic_green');
			}
		}


	}

	function sic_settip (item)
	{
		console.log("settip");
		var myLabel = jQuery("label[for="+item[0]+"]");
		var myObj = jQuery(document.getElementById(item[0]));
		var textVal = myObj.val();
		myLabel.html(sic_label+" - "+sic_lang["actsiclength"][0]+" "+textVal.length+" "+sic_lang["actsiclength"][1]+" - "+sic_lang["siclength"][0]+" "+item[1]+" - "+item[2]);
		sic_check(item);
	}


	jQuery.each(sic_vars , function(index, val) {
	  	var item = val;
  		var myObj = jQuery(document.getElementById(item[0]));
    	sic_check(item);
    	myObj.focus(function(){
			myObj.addClass("showsictip");
			sic_label = jQuery("label[for="+item[0]+"]").html();
			sic_settip(item);
		});
    	myObj.blur(function(){
			myObj.removeClass("showsictip");
			jQuery("label[for="+item[0]+"]").html(sic_label);
		});
    	myObj.keyup(function(){
			sic_settip(item);
		});
	});

});
