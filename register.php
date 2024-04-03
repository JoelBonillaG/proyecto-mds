<?php require_once('header_menu_sectionLogo.php'); ?> 
      <?php require_once('header_menu.phpV1.php'); ?> 
      <div class="page-wrapper d-flex justify-content-center align-items-center">
      <div class="container container-tight py-4">
        
        <form  id="register-form" class="card card-md" action="./" method="get" autocomplete="off" novalidate="">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="Enter name" name="nombre" id="nombre">
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" placeholder="Enter email" name="register_mail" id="register_mail">
            </div>
            <div class="mb-3 position-relative">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="register_password" id="register_password">
    <i id="passChange" class="fa-solid fa-eye-slash position-absolute" style="right: 10px; top: 70%; transform: translateY(-50%);"></i>
</div>
           
            <div class="form-footer">
              <button type="button" class="btn btn-primary w-100" id="register_button">Create new account</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Already have account? <a href="./login.php" tabindex="-1">Sign in</a>
        </div>
      </div>
    </div>

      <?php require_once('footerV1.php'); ?> 

      <script>




$(document).ready(function() {
    $.validator.addMethod("strongPassword", function(value, element) {
        return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@*().-_])[a-zA-Z\d!@*().-_]{8,}$/.test(value);
    }, "La contraseña debe tener al menos 8 caracteres y contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial (opcional).");
    $.validator.addMethod("controllerName", function(value, element) {
    return this.optional(element) || /^[A-Za-z0-9_]+$/.test(value);
}, "El nombre no puede contener espacios en blanco ni caracteres especiales, solo letras, números o guiones bajos (_).");
    
    $("#register-form").validate({
        rules: {
          nombre: {
                required: true,
                minlength: 5,
                maxlength:10,
                controllerName: true,
            },
            register_mail: {
                required: true,
                email: true,
            },
            register_password: {
                required: true,
                strongPassword: true,
                minlength:8,
            },
        },
        messages: {
            nombre: {
                required: "Por favor ingrese un nombre",
                minlength: "Por favor ingrese al menos 5 caracteres",
                maxlength:"El número máximo de carácteres es 10"
            },
            register_mail: {
                required: "Por favor ingrese un email",
                email: "Por favor ingrese un email válido",
            },
            register_password: {
                required: "Por favor ingrese una contraseña para esta cuenta",
                minlength:"Por favor ingrese al menos 8 caracteres para la contraseña"
            },
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("error");
            var container = $("<div>").addClass("error-container");
            container.insertAfter(element);
            error.appendTo(container);
        },
        highlight: function(element) {
            $(element).addClass("error");
        },
        unhighlight: function(element) {
            $(element).removeClass("error");
        },
    });
});

$('#register_button ').click(function() {

  if (
    $("#register-form").valid()
   
) {
console.log("Paso");


}else{

console.log("No paso");  
}
});


// // function validarCorreoElectronico(correo) {
    
// //     var regCorreo= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  
// //     return regCorreo.test(correo);
// // }
// function enviarMensaje(){

// $mail_setFromEmail=$('#customer_email').val();
// $mail_setFromName=$('#customer_name').val();
// $txt_message=$('#message').val();
// $mail_subject='Cliente Nuevo Pagina  Vaz:';	
// $telefono=$("#telefono").val();
// //var expresionRegularCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;




// if($("#modalForm form").valid()
// ){
//   $.ajax({
//     url:'sendemail.php',
//       data:{mail_setFromEmail:$mail_setFromEmail,
//         mail_setFromName:$mail_setFromName,
//           txt_message:$txt_message,
//           mail_subject:$mail_subject,
//           telefono:$telefono,
//         },
//     type:'POST',
//     dataType: 'html',
//     beforeSend: function() {
//       var inputNombre = document.getElementById("send");
//       inputNombre.value = "Enviando...";
//     //$('#send').text('Enviando...');
//     $('#send').addClass('btn-info');
//     },
//     success: function( resp ) {
    
//       $('#send').text('Enviar Mesaje');
//       $('#send').removeClass('btn-info');
//       $('#send').addClass('btn-success');
//       $('#modalForm').modal('hide');


//   mostrarModalExito("Email enviado con éxito");
//     }
//   });
// }

  
// }
</script>
