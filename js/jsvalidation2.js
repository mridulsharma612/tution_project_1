jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
  });
$("#ab").validate({
    rules: {
      n1: {
       required: true    
      },
      a1: {
       required: true      
      },
      a12: {
       required: true   
      },
      p1: {
      required: true     
      }    
    }
});