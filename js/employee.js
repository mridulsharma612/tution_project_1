$(document).ready(function(){
  $("#subm").click(function(){
     $de=$("#details").val();

     $.post("employee1.php",
       {
           de:$de
       },
       function(status,info){
         $("#i1").html(status);
     });
  });  
})