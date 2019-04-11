$(document).ready(function(){
  $("#subm").click(function(){
    $companyusername=$("#details").val();
    
     $.post("company_questions1.php",
        {
            companyusername:$companyusername
        },
        function(details,info){
        $("#a1").html(details);   
     });
  });
});