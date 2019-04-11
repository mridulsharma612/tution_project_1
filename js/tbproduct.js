$(document).ready(function() {
    $("#sub1").click(function() {
        $ci = $("#area-dropdown").val();
        $.post("tbproduct1.php", {
                ci: $ci
            },
            function(info, status) {
                $("#d1").html(info);
            });
    });
});