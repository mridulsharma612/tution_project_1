$(document).ready(function() {
    $("#b1").click(function() {
        $.ajax({
            url: 'survey1.php',
            type: 'POST',
            data: $('#info').serialize(),
            success: function(info) {
                $("#a1").html(info);
            }
        });
    });
});