$(document).ready(function(){
  $("#b1").click(function(){
    
     $.ajax({url:'tbcompany.php',
             type: 'POST',
             data:$('#r1').serialize(),
             success: function(showinfo){
                alert("Company has been successfully registered!"); 
    }});
  });
});