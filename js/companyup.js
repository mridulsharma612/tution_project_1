$(document).ready(function() {
  $("#e1").click(function() {
     $com = $("#company").val();
     $.post("companyup1.php", {
         com: $com
     },
     function(info,status) {
       $("#i1").html(info);
     });
  
  });

});