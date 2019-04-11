$(document).ready(function(){
  $("#subm1").click(function(){
    $q=$("#ques").val();

    $.post("companyques1.php",
      {
          q:$q
      },
      function(data,info){
         $("#a1").html(data);  
      });
  });
});