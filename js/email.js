$(document).ready(function() {
    $("#btn-login").click(function() {
     $.ajax({url:'email1.php',
             type:'POST',
             data:$('#login').serialize(),
             success: function(showinfo){
             window.location.href="email_welcome.php";     
    }});
  });
});