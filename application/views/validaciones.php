</div>
<script>
$(document).ready(function() {
    /**/var msgDate = '';
    var inputFocus = '';
});

function Insert_Genero(){
    var dataString = $("#formulario").serialize();
    var url="<?php echo site_url(); ?>Corporacion/Insert_Genero";
    if (Valida_Genero()) {
        $.ajax({
            type:"POST",
            url:url,
            data:dataString,
            success:function (data) {
                if(data=="error")
                {
                    Swal({
                        title: 'Registro Denegado',
                        text: "¡El registro ya existe!",
                        type: 'error',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                    });
                }
                else
                {
                    swal.fire(
                        'Registro Exitoso!',
                        'Haga clic en el botón!',
                        'success'
                    ).then(function() {
                        window.location = "<?php echo site_url(); ?>Corporacion/Genero";
                    });
                }
            }
        });
    }    
    else{
        bootbox.alert(msgDate)
        var input = $(inputFocus).parent();
        $(input).addClass("has-error");
        $(input).on("change", function () {
            if ($(input).hasClass("has-error")) {
                $(input).removeClass("has-error");
            }
        });
    }
}

function Edit_Genero(){
    var dataString = $("#formulario").serialize();
    var url="<?php echo site_url(); ?>Corporacion/Update_Genero";
    
    if (Valida_Genero()) {
        $.ajax({
            type:"POST",
            url: url,
            data:dataString,
            success:function (data) {
                swal.fire(
                    'Actualización Exitosa!',
                    'Haga clic en el botón!',
                    'success'
                ).then(function() {
                    window.location = "<?php echo site_url(); ?>Corporacion/Genero";
                });
            }
        });
    }    
    else{
        bootbox.alert(msgDate)
        var input = $(inputFocus).parent();
        $(input).addClass("has-error");
        $(input).on("change", function () {
            if ($(input).hasClass("has-error")) {
                $(input).removeClass("has-error");
            }
        });
    }
}

function Valida_Genero() {
    if($('#cod_genero').val().trim() === '') {
        msgDate = 'Debe ingresar un código para el género.';
        inputFocus = '#cod_genero';
        return false;
    }

    if($('#nom_genero').val().trim() === '') {
        msgDate = 'Debe ingresar un género.';
        inputFocus = '#nom_genero';
        return false;
    }

    return true;
}

function Delete_Genero(id){
    var id = id;
    var url="<?php echo site_url(); ?>Corporacion/Delete_Genero";
    Swal({
        //title: '¿Realmente quieres eliminar el registro de '+ nombre +'?',
        title: '¿Realmente desea eliminar el registro',
        text: "El registro será eliminado permanentemente",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No',
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type:"POST",
                url:url,
                data: {'id_genero':id},
                success:function () {
                    Swal(
                        'Eliminado!',
                        'El registro ha sido eliminado satisfactoriamente.',
                        'success'
                    ).then(function() {
                        window.location = "<?php echo site_url(); ?>Corporacion/Genero";
                    });
                }
            });
        }
    })
}
</script>