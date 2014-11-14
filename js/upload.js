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

var serverURL = "http://localhost/kela-team/kela-team/";

  $("#submitButton").click(function(){
    var torrentName = $(".torrentName").val();
    if (old_password == "") {
      $( ".torrentNameError" ).text( "* This field is required." );
              //return false;
    }
    else {
      $.ajax({
        type : 'POST',          
        url : serverURL + "musicupload.php", // Servlet URL          
        data:{
          user_id: 1,
          torrent_neve: torrentName
        },
        success : function(response) {     
          alert(response);
        },
        error : function(xhr, type) {
          alert('Server error occurred');
        }
        });   
    }
  });
  
});

/*-------------------------------------------EZ CSAK SEGÍTSÉG ------------------------------------------*/
/*$("body").on("tap", "#submitEditProfileButton", function(){
  var old_password = $("#oldPassword").val();
  var new_password = $("#newPassword").val();
  var confirm_password = $("#confirmPassword").val();
  if (old_password == "") {
    alert("Please enter the old password!");
    $("#oldPassword").focus();
            //return false;
          } else if (new_password == "") {
            alert("Please enter the new password!");
            $("#newPassword").focus();
            //return false;
          } else if (confirm_password == "") {
            alert("Please confirm the new password!");
            $("#confirmPassword").focus();
            //return false;
          } else if (old_password.length < 6) {
            alert("Your old password is at least 6 characters long.");
            $("#oldPassword").focus();
            //return false;
          } else if (new_password.length < 6) {
            alert("Password must be at least 6 characters!");
            $("#newPassword").focus();
            //return false;
          } else if (new_password.localeCompare(confirm_password) != 0) {
            alert("Your new password and confirmation password do not match!");
            $("#confirmPassword").focus();
            //return false;
          }
          else {
            $.ajax({
              type : 'POST',          
                url : serverURL + "changepassword", // Servlet URL          
                data:{
                  user_id: user_id,
                  old_password: old_password,
                  new_password: new_password
                },
                success : function(data) {        
                  if(data == 1){                    
                    alert("Password changing success!");
                    $("body").pagecontainer("change", "#profile", {transition: "none"});
                  } else {                   
                    alert("Invalid old password!");
                  }
                },
                error : function(xhr, type) {
                  alert('Server error occurred');
                }
              });   
          }
        });*/

