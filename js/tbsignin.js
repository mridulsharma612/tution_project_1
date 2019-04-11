$("document").ready(function(){
  $("#submit").click(function(){
    $username=$("#username").val();
    $password=$("#password").val();
    $.post("tbsignin1.php", {
       username:$username,
       password:$password
    },
    function(content,request)
    {
        setTimeout(' window.location.href = "tbwelcome.php"; ',4000);

    });
  });
});