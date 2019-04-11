$(document).ready(function(){
  $("#b1").click(function(){
    
    $.ajax({
        url:'reg.php',
        type:'post',
        data:$('#register').serialize(),
        success:function(a) {
            console.log("You have been successfully registered");
        }
     }); 
   });
});