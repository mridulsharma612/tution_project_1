$(document).ready(function(){
  $("#submitbtn").click(function(){
       $id = $("#id").val();
       $.post("placement_delete.php",
        {
            id:$id
        },
         function(action, status){
         alert("Your Entry has been successfully deleted from the database");
    });  
  });
});