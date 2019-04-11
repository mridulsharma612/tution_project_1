$(document).ready(function() {
    $("#i1").click(function() {
        $.ajax({
            url: 'donorinfo1.php',
            type: 'POST',
            data: $('#dd1').serialize(),
            success: function(info) {
                $("#d1").html(info);
            }
        });
    });
});