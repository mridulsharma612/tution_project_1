$(document).ready(function(){
  $("#submit").click(function(){
     $rollno=$("#rn").val();
     $firstname=$("#fn").val();
     $lastname=$("#ln").val();
     $email=$("#email").val();
     $contact=$("#contact").val();
     $address=$("#address").val();
     $tenthmarks=$("#marks1").val();
     $twelfthmarks=$("#marks2").val();
     $graduationmarks=$("#marks3").val();
     $.post("placement.php",
     {
         rollno:$rollno,
         firstname:$firstname,
         lastname:$lastname,
         email:$email,
         con:$contact,
         add:$address,
         tenthmarks:$tenthmarks,
         twelfthmarks:$twelfthmarks,
         graduationmarks:$graduationmarks
     },
     function(info, value){
        alert("You have been successfully registered for the placement cell!");
     });
  });
});