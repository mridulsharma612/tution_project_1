$(document).ready(function(){
  $("#up1").click(function(){
   $ide = $("#i1").val();   
   $o1 = $("#op1").val();
   $o2 = $("#op2").val();
   $o3 = $("#op3").val();
   $o4 = $("#op4").val();
   $an = $("#ans").val();
   $.post("companyques2.php", {
          ide:$ide,
          o1:$o1,
          o2:$o2,
          o3:$o3,
          o4:$o4,
          an:$an
   },
   function(info,status){
       $("#a2").html(info);
    }); 
  });
});