$(document).ready(function(){
  $("#sbm1").click(function(){
     $idd = $("#i11").val();

     $pn = $("#i12").val();
     $pr = $("#i13").val();
     $qty = $("#i14").val();
     $c = $("#i15").val();
     $.post("tbupdate2.php", {
          idd:$idd,
          pn:$pn,
          pr:$pr,
          qty:$qty,
          c:$c
        },
        function(info,status){
          $("#info2").html(info);
    });
  });
});