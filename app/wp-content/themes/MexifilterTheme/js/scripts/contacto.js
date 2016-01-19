//Scripts contacto
$(document).ready(function(){
    //var sitio = sitioOfi;
    $('#formContact').validate({
          rules: {
              nombre: { required: true },
              telefono: { required: true, digits: true },
              email: { required: true,  email: true },
              asunto: { required: true },
              mensaje: { required: true }
          },
          messages: {
              nombre: { required: "<i class='fa fa-exclamation-circle'></i> Por favor, escribe tu nombre completo" },
              telefono: { required: "<i class='fa fa-exclamation-circle'></i> Por favor, agrega un teléfono", digits: "<i class='fa fa-exclamation-circle'></i> Solo números (10 digitos)" },
              email: { required: "<i class='fa fa-exclamation-circle'></i> Necesitas un correo eletrónico", email: "<i class='fa fa-exclamation-circle'></i> Tu email no tiene el formato nombre@dominio.com" },
              asunto: { required: "<i class='fa fa-exclamation-circle'></i> Escribe un Asunto" },
              mensaje: { required: "<i class='fa fa-exclamation-circle'></i> Escribe un Comentario" }
          },
          submitHandler: function (form){
                $.ajax({
                    url: '/contactoForm.php',
                    type: 'POST',
                    data: $('#formContact').serialize(),
                    //dataType: 'json',
                    success:function(data) {
                        if(data=='ok'){
                            $("#resConctact").html('<p class="bg-success">Mensaje envíado correctamente</p>').fadeOut(8000);
                            $("#formContact").each (function(){
                                this.reset();
                            });
                        }else{
                            $("#resConctact").html('Ha ocurrido el siguiente error: '+data).fadeOut(8000);
                        }

                    }
                })
          }
    });
    
});