$(document).ready(function(){
  $("#sub1").click(function(){
     
    $.ajax({url:'userlogin.php',
            type: 'POST',
            data: $('#login').serialize(),
            success: function(info){
               alert("User has been successfully registered!");
    }});
  });
});