$(document).ready(function(){
  $("#submit").click(function(){
     $i=$("#info").val();

     $.post("companydetails1.php",
     {
         i:$i
     },
     function(info,status){
       $("#a1").html(info);
     });
  });
});