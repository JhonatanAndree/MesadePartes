function init(){
    
}

$(document).ready(function() {
    
});

$(document).on("click","#btnrecuperar", function(){

    var usu_correo = $('#usu_correo').val();

    if(usu_correo ==""){
        Swal.fire(
            'Mesa De Partes',
            'Error, campo vacío',
            'error'
        );
    }else{ 
        $.post("../controller/usuario.php?op=correo", { usu_correo : usu_correo}, function(data){
            if (data=='[]'){
                Swal.fire(
                    'Mesa De Partes',
                    'Usuario no Registrado',
                    'error'
                );
            }else{
                $.post("../controller/email.php?op=send_recuperar", { usu_correo : usu_correo}, function(data){
                    $('#usu_correo').val('');
                });

                Swal.fire(
                    'Mesa De Partes',
                    'Se ha enviado un correo con sus datos, revise en spam, quizá llegue allí.',
                    'success'
                );
            }
        });
    }

});

init();