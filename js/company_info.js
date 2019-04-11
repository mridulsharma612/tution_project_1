$(document).ready(function() {

    
    $("#submit").click(function() {
        $id = $("#details").val();
      
        $.post("company_info1.php", {
            },
            function(details, status) {
                $("#g1").html(details);
            });
    });
});