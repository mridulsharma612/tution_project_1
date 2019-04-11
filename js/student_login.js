$(document).ready(function(){
 $("#btn-login").click(function(){
    $.ajax({url:'student_login1.php',
            type:'POST',
            data:$('#std').serialize(),
            success: function(selectinfo){
               
              window.location.href="student_welcome.php";
            
   }});
 });
});