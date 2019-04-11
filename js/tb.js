$(document).ready(function(){
 $("#submit").click(function(){
   $username=$("#username").val();
   $password=$("#password").val();
   $securityquestion=$("#security").val();
   $securityanswer=$("#answer").val();
   $.post("tb.php",
   {
       username:$username,
       password:$password,
       security:$securityquestion,
       answer:$securityanswer
   },
   function(details,status){
     alert("User has been successfully registered!");
   });
 });
});