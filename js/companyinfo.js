$(document).ready(function() {

    $("#submit").click(function() {
        $info = $("#details").val();

        $.post("companyinfo1.php", {},
            function(status, details) {
                $("#t1").html(status);
            });
    });
});