$(document).ready(function(){
  $("#submit").click(function(){
      $id = $("#id").val();
      $.post("company_delete",
      {
          id:$id
      },
      function(records, info) {
          alert("You have successfully deleted a record from database");
      });
  });
});