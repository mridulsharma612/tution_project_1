$(document).ready(function(){
 $("#submit").click(function(){
   $username=$("#username").val();
   $password=$("#password").val();
   $securityquestion=$("#security").val();
   $securityanswer=$("#answer").val();
   $.post("tblogin1.php", {
        username:$username,
        password:$password,
        security:$securityquestion,
        answer:$securityanswer
    },
    function(info,status){
       alert("User has been successfully registered!");
    });
 });
});