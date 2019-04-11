$(document).ready(function(){
 $("#b1").click(function(){
   $.ajax({
          url:'tbtest.php',
          type:'POST',
          data:$('#product').serialize(),
          success: function(details){
             alert("Product has been successfully inserted into the db!"); 
    }});
 });
});