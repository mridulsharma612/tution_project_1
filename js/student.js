$(document).ready(function(){
 $("#reg").click(function(){
    
    $.ajax({url:'student.php',
            type:'POST',
            data:$('#r1').serialize(),
            success: function(showdetails){
            alert("Student has been successfully registered!");
  }});
 });
});