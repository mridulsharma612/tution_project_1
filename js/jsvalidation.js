jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
  $( "#myform" ).validate({
    rules: {
      field: {
        required: true
      },
      lname:
      {
          required:true
      }
    }
  });