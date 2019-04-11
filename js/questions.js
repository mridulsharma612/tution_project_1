$(document).ready(function(){
  $("#submitbtn").click(function(){
    $question = $("#question").val();
    $option1  = $("#option1").val();
    $option2  = $("#option2").val();
    $option3  = $("#option3").val();
    $option4  = $("#option4").val();
    $answer   = $("#answer").val();
    $companyid = $("#companyid").val();
    $.post("questions.php",
    {
        question:$question,
        option1:$option1,
        option2:$option2,
        option3:$option3,
        option4:$option4,
        answer:$answer,
        companyid:$companyid
    },
    function(add, status){
      alert("Question has been successfully added in the database!");
    });
  });
});