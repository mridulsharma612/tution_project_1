$(document).ready(function() {
    $("#submit").click(function() {
        $companyname = $("#companyname").val();
        $companydirector = $("#companydirector").val();
        $companyemail = $("#companyemail").val();
        $companyaddress = $("#companyaddress").val();
        $companycontact = $("#companycontact").val();
        $companyusername = $("#companyusername").val();
        $companypassword = $("#companypassword").val();
        $.post("company.php", {
                companyname: $companyname,
                companydirector: $companydirector,
                companyemail: $companyemail,
                companyaddress: $companyaddress,
                companycontact: $companycontact,
                companyusername: $companyusername,
                companypassword: $companypassword
            },
            function(info, status) {
                alert("Company has been successfully registered!");
            });
    });
});