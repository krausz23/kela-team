$(document).ready(function(){
	$("#musicUploadDiv").css("display","none");
	$("#movieUploadDiv").css("display","none");
  	$("#categorySelect").change(function(){

  		if ($('option:selected', this).text() == 'Music') {
  			$("#musicUploadDiv").css("display","block");
  			$("#movieUploadDiv").css("display","none");
  		}
  		else if($('option:selected', this).text() == 'Movie'){
  			$("#musicUploadDiv").css("display","none");
  			$("#movieUploadDiv").css("display","block");
  		}
	});
});




