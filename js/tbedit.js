$(document).ready(function() {
    $("#ed").click(function() {
        $e = $("#edit").val();
        $.post("tbedit1.php", {
                e: $e
            },
            function(details, info) {
                $("#a1").html(details);
            });
    });
});