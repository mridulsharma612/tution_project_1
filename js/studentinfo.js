$(document).ready(function() {

    $("#submit").click(function() {
        $data = $("#select").val();

        $.post("studentinfo1.php", {},
            function(info, status) {
                $("#r1").html(info);
            });
    });
});