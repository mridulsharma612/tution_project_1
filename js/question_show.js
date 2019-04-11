$(document).ready(function(){
  $("#submitbtn").click(function(){
       $companyid=$("#info").val();

       $.post("question_show1.php",
       {
           companyid:$companyid 
       },
       function(info,data){
         $("#i1").html(info);
      });
   });
});