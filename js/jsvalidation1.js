jQuery.validator.setDefaults({
     debug: true,
     success:"valid"
 });
 $("#info").validate({
    rules: {
      fn: {
      required: true    
      },
      ln: {
      required: true 
      },
      em: {
      required: true    
      },
      pass: {
      required: true    
      }
    }
 });