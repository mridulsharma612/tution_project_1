$(document).ready(function(){
  $("#log").click(function(){
    $.ajax({url:'company_login1.php',
             type:'POST',
             data:$('#ca').serialize(),
             success: function(showdata){
             window.location.href="company_welcome.php";     
    }});
  });
})