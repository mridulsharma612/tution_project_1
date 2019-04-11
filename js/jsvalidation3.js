$(function(){
    $("#datepicker").datepicker();
    });
jQuery.validator.setDefaults({
    debug: true,
    success:"valid"
});
$("#ab").validate({
    rules: {
     fn: {
     required: true   
     },
     ln: {
     required: true
     },
    datepicker: {
    required: true
    },
     gender: {
     required: true    
     },
     em: {
     required: true    
     },
     user: {
     required: true 
     },
     pass: {
     required: true,
     minlength: 6    
     },
     cpassword: {
     required: true,
     minlength: 6,
     equalTo: "#pass"    
     },    
   },
   messages:{
       fn:"Please enter your firstname",
       ln:"Please enter your lastname",

       datepicker:"Please enter your DOB",
       gender:"Please select your gender",

       em:"Please enter your email",
       user:"Please enter your username",
      
       pass: {
           required:"Please provide a password",
           minlength:"Your Password must be atleast 6 characters long"
       },
       cpassword: {
           required:"Please provide a password",
           minlength:"Your Password must be atleast 6 characters long",
           equalTo:"Please enter the same password as above"
       },
    },
})