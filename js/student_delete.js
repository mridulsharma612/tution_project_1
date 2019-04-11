$(document).ready(function(){
 $("#sub1").click(function(){
   
    $.ajax({url:'student_delete.php',
            type: 'POST',
            data:$("#student").serialize(),
            success: function(deleteinfo){
            alert("Student information has been successfully deleted from the database!");    
    
  }});
 });
});