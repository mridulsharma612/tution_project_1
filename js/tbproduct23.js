$(document).ready(function() {
    $("#sub12").click(function() {
        $p = $("#products").val();
        $.post("tbproduct231.php", {
                p: $p
            },
            function(info, status) {
                $("#i1").html(info);
            });
    });
});