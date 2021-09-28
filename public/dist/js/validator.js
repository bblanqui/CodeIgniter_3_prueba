$("#formulario").validate({

rules: {
  nombres:{
    required:true,
    minlength:3,
    maxlength:30


  },
  apellidos:{
    required:true,
    minlength:3,
    maxlength:30


  },
  email:{
    required:true,
    minlength:3,
    maxlength:30,
    email:true


  },
  identificacion:{
    required:true,
    minlength:3,
    maxlength:15,
    number:true


  }
}



})



