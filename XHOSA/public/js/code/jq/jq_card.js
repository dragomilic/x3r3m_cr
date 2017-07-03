$(document).ready(function(){
    $(".thumbnail").hover(
    	  function() {
		    $(this).children(".descrip").show('slow');
		  }, function() {
		    $(this).children(".descrip").hide('slow');
		  }
	);
});