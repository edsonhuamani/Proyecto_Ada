<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_survey/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_survey/wizard.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_survey/bootstrap4.3.min.css">



    <link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
</head>

<body>
    <div class="container">
        <div class="header">
        <img class="pequeña" src="<?= base_url() ?>assets/imagenes_survey/LN12_220x.png" alt="Imagen logo" />
            <h2>
				Registro de datos
			</h2>
        </div>


        <div class="container-fluid">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Paso 1</strong></li>
                                <li id="personal"><strong>Paso 2</strong></li>
                                <li id="payment"><strong>Paso 3</strong></li>
                                <li id="casi"><strong>Paso 4</strong></li>
                                <li id="confirm"><strong>Paso 6</strong></li>

                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> 
                            
                            <br> <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Información del trabajo:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Preguntas de 1 - 10</h2>
                                                </div>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">1.- Centro de labores</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label for="">2.- Fecha de Ingreso</label>
                                                <input type="date" id="fechai"  min="2005-01-01" max="2021-01-01" > 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">3.- Situación</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">4.- Apellido Paterno</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">5.-Apellido Materno</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">6.- Nombre Completo</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">7.- Cargo</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">8.- Puesto</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">9.- Área</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            
                                            <div class="form-control">
                                                <label class="fieldlabels">10.- Gerencia</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>
                                    
                                        </div> 

                                        <input type="button" name="next" class="next action-button" value="Siguiente" />

                                    </fieldset>

                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Información Personal:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Preguntas de 11 - 20</h2>
                                                </div>
                                            </div> 
                                                    <div class="form-control">
                                                        <label class="fieldlabels">11.- Nacionalidad</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">12.- Tipo de Documento</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">13.- N° de documento</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">14.- Genero</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">15.- Fecha de Nacimiento</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">16.- Estado Civil</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">17.- N° de hijos</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">18.- Correo Electrónico</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">19.- Teléfono Celular</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>

                                                    <div class="form-control">
                                                        <label class="fieldlabels">20.- Distrito</label>
                                                        <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                        <i class="fas fa-check-circle"></i>
                                                        <i class="fas fa-exclamation-circle"></i>
                                                        <small>Error Msg</small>
                                                    </div>
                                        
                                        
                                        
                                        </div> 
                                        
                                        
                                        <input type="button" name="next" class="next action-button" value="Siguiente" />
                                        
                                        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                    
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Image Upload:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Preguntas de 21 - 30</h2>
                                                </div>
                                            </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">21.- Provincia</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">22.- Departamento</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">23.- Contacto Emergencia</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">24.- Teléfono contacto de emergencia</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">25.- Grado de instrucción</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">26.- Especialidad</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>


                                                <div class="form-control">
                                                    <label class="fieldlabels">27.- Talla de Polo</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">28.- Sistema de Pensiones </label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>


                                                <div class="form-control">
                                                    <label class="fieldlabels">29.- Número de cuenta </label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                                <div class="form-control">
                                                    <label class="fieldlabels">30.- Antiguendad en Años</label>
                                                    <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                    <i class="fas fa-check-circle"></i>
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <small>Error Msg</small>
                                                </div>

                                        </div> 
                                        
                                        <input type="button" name="next" class="next action-button" value="Siguiente" />
                                        
                                        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />

                                    </fieldset>




                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Estado en el Trabajo:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Preguntas de 31 - 40</h2>
                                                </div>
                                            </div>
                                            <br>
                                            <br>

                                            <div class="form-control">
                                                <label class="fieldlabels">31.- Antiguedad de Meses</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">32.- Código</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">33.- Alta de Registro</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">34.- Razón Social</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>
        
                                            <div class="form-control">
                                                <label class="fieldlabels">35.- Inicio de Contrato</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">36.- Fin de Contrato</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">37.- Fecha de Cese</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">38.- Antiguedad en Años</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">39.- Antiguedad en Meses</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                            <div class="form-control">
                                                <label class="fieldlabels">40.- Motivo de Cese</label>
                                                <input type="text" name="" id="username" placeholder="Ingrese su centro de labores" autocomplete="off" /> 
                                                <i class="fas fa-check-circle"></i>
                                                <i class="fas fa-exclamation-circle"></i>
                                                <small>Error Msg</small>
                                            </div>

                                        </div>


                                          <input type="button" name="next" class="next action-button" value="Guardar" /> 
                                        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />

                                       
                                    </fieldset>


                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Completado:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Fin de encuesta</h2>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <h2 class="purple-text text-center"><strong>EXITO !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">Gracias por responder la encuesta</h5>
                                        </div>
                                    </div>
                                   
                                </div>
                            </fieldset>

                        </form>
        </div>
        

    </div>

	<script src="<?=base_url('assets/js_survey/validaciones.js')?>"></script>
	<script src="<?=base_url('assets/js_survey/wizard.js')?>"></script>

    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script>
    
$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });

    $(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;

    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });

    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }

    $(".submit").click(function(){
    return false;
    })
    });
</script>
  

</body>
</html>