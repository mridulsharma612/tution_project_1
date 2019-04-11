$(document).ready(function() {
    $("#e2").click(function() {
        $ide = $("#a1").val();

        $cn = $("#a2").val();
        $cd = $("#a3").val();
        $ce = $("#a4").val();
        $ca = $("#a5").val();
        $co = $("#a6").val();
        $cu = $("#a7").val();
        $cp = $("#a8").val();
        $.post("companyup2.php", {
                ide: $ide,
                cn: $cn,
                cd: $cd,
                ce: $ce,
                ca: $ca,
                co: $co,
                cu: $cu,
                cp: $cp
            },
            function(details, information) {
                $("#i2").html(details);
            });
    });
});