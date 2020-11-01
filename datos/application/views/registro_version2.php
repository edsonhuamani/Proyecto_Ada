<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_survey/bootstrapVersion2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css_survey/style2.css">


    
</head>

<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-9 col-lg-10 col-md-11">
                <div class="card rounded-0 b-0">

                    <div class="card-header">
                    <img class="carde pequeña" src="<?= base_url() ?>assets/imagenes_survey/LN12_220x.png" alt="Imagen logo" />

                        <div class="row d-flex justify-content-between text-md-center">
                                <h5 class="yellow-text letra5">Encuesta de puesto de trabajo</h5>
                                <h6>Sigue las indicaciones porfavor</h6>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-sm-end justify-content-start px-5">
                        <div class="count text-center">
                            <p class="mb-sm-0 pb-sm-0"><strong><span id="cnt">8</span>%</strong> <span class="yellow-text">Completed</span></p>
                        </div>
                    </div>

                    <div class="card-body show pt-0">
                        <h4 class="heading mb-4 pb-1">DATOS DEL PUESTO</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar y/o cargar los documentos requeridos.</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <div class="form-group"> <label class="form-control-label">Centro de Labores:</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group"> <label class="form-control-label">Razon Social :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">RUC: :</label> <input type="text" id="ruc" name="ruc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Dirección :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Fecha de ingreso :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        
                        <div class="form-group"> <label class="form-control-label">Gerencia:</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>

                        <div class="form-group"> <label class="form-control-label">Área:</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>                        
                        
                        <div class="form-group"> <label class="form-control-label">Puesto al que ingresa:</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div> 

                        <div class="row justify-content-center"> <button class="btn btn-blue next mx-2" id="next1">Next<span class="fa fa-long-arrow-right"></span></button> </div>
                   
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">DATOS PERSONALES</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica:</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <div class="form-group"> <label class="form-control-label">Apellidos paterno :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Apellidos materno :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombres :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nacionalidad: </label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Tipo Documento :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Número de Documento :</label> <input type="number" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Género :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Fecha de Nacimiento :</label> <input type="date" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Estado Civil :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Correo Electrónico :</label> <input type="mail" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número celular :</label> <input type="number" id="ruc" name="ruc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Dirección :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Teléfono fijo :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        
                        <div class="form-group"> <label class="form-control-label">Tipo de Vía :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Nombre de la Vía :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número de la Vía :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Dpto./Piso/Interior :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Referencia del domicilio :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Departamento :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>                        
                        <div class="form-group"> <label class="form-control-label">Provincia :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Distrito :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group"> <label class="form-control-label">Tipo de vivienda :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Maps :</label> <input type="text" id="direc" name="direc" placeholder="" class="form-control" > </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">
                                Next<span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                   
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">REFERENCIAS FAMILIARES</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica:</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <label class="text-danger mb-3">Datos familiares</label>
                        <div class="form-group"> <label class="form-control-label">Relación :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre del familiar :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Fecha de nacimiento :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Teléfono : </label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        
                        <label class="text-danger mb-3">Datos contacto de emergencia</label>
                        <div class="form-group"> <label class="form-control-label">Relación :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre del familiar :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Fecha de nacimiento :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Teléfono : </label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        
                        <label class="text-danger mb-3">Datos de hijos/as (puedes incluir hijos no biológicos)</label>
                        <div class="form-group"> <label class="form-control-label">Nombre del hijo/a :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Genero :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>                        
                        <div class="form-group"> <label class="form-control-label">Fecha de nacimiento :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">DNI : </label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Edad : </label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">
                                Next<span class="fa fa-long-arrow-right">     
                                </span>
                            </button> 
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">ESTUDIOS REALIZADOS</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica:</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <label class="text-danger mb-3">Estudios generales</label>
                        <div class="form-group"> <label class="form-control-label">Grado de instrucción :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>                         
                        <div class="form-group"> <label class="form-control-label">Carrera de estudios :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Centro de estudios :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <label class="text-danger mb-3">Conocimientos Office</label>
                        <div class="form-group"> <label class="form-control-label">Nivel de Excel :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>  
                        <div class="form-group"> <label class="form-control-label">Nivel de Word :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>  
                        <div class="form-group"> <label class="form-control-label">Nivel de Power Point :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>

                        <label class="text-danger mb-3">Conocimientos Office</label>
                        <div class="form-group"> <label class="form-control-label">Nivel de inglés :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-1</option>
                                    <option>Enter2 </option>
                                    <option>Personal 3</option>
                                    <option>Business 4</option>
                                </select> 
                            </div>
                        </div>
                        <label class="text-danger mb-3">Cursos complementarios</label>
                        <div class="form-group"> <label class="form-control-label">Cursos realizados :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Año :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>

                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">Next
                                <span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">EXPERIENCIAS LABORALES</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica::</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <label class="text-danger mb-3">Última experiencia</label>
                    
                        <div class="form-group"> <label class="form-control-label">Empresa :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Cargo :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Periodo laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Motivo de salida :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Importe de remuneración :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre de referencia laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número de contacto :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <label class="text-danger mb-3">Penúltima experiencia</label>

                        <div class="form-group"> <label class="form-control-label">Empresa :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Cargo :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Periodo laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Motivo de salida :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Importe de remuneración :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre de referencia laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número de contacto :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">Next
                                <span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">EXPERIENCIAS LABORALES</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica::</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <label class="text-danger mb-3">Última experiencia</label>
                    
                        <div class="form-group"> <label class="form-control-label">Empresa :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Cargo :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Periodo laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Motivo de salida :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Importe de remuneración :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre de referencia laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número de contacto :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <label class="text-danger mb-3">Penúltima experiencia</label>

                        <div class="form-group"> <label class="form-control-label">Empresa :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Cargo :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Periodo laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Motivo de salida :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Importe de remuneración :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Nombre de referencia laboral :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Número de contacto :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">Next
                                <span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">INFORMACIÓN DE SALUD</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar los siguientes datos con información verídica:</h4> 
                        <label class="text-danger mb-3">* Required</label>

                        <label class="text-danger mb-3">SALUD</label>
                    
                        <div class="form-group"> <label class="form-control-label">Tipo de sangre: :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Indique si padece de alguna enfermedad :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Indique la fecha en que fue diagnosticado de dicha enfermedad :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Indique si se encuentra en periodo de gestación :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Si su respuesta es "Sí", indique la fecha de inicio del periodo de gestación :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Indique si es alérgico a algún medicamento :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                        <div class="form-group"> <label class="form-control-label">Si su respuesta es "Sí", indique el nombre del/los medicamentos :</label> <input type="text" id="razons" name="razons" placeholder="" class="form-control" > </div>
                       
                        <div class="row justify-content-center">
                            <button class="btn btn-secondary prev mx-2">
                                    <span class="fa fa-long-arrow-left">
                                    </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next1">Next
                                <span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                    </div>

                    
                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">GESTIÓN DEL TALENTO HUMANO</h4>
                        <h4 class="heading mb-4 pb-1 letraspequeñas">A continuación completar y/o cargar los documentos requeridos :</h4> 

                         <label class="text-danger mb-3">REFERENCIA DE CONVOCATORIA</label>
                        <div class="form-group"> <label class="form-control-label">Indica cómo te enteraste del puesto :</label> <input type="text" id="fname" name="fname" placeholder="" class="form-control" onblur="validate1(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Si su respuesta es "otros", indique :</label> <input type="text" id="lname" name="lname" placeholder="" class="form-control" onblur="validate1(2)"> </div>
                        
                        <label class="text-danger mb-3">ADJUNTAR DOCUMENTACIÓN</label>
                        <div class="form-group"> <label class="form-control-label">Foto personal (cintura para arriba) :</label> <input type="text" id="email" name="email" placeholder="" class="form-control" onblur="validate1(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">Currículum actualizado :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Foto de tu DNI (ambas caras):</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Foto de DNI de todos los hijos (ambas caras) :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>
                        
                        <div class="form-group"> <label class="form-control-label">Currículum actualizado :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Currículum actualizado :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Currículum actualizado :</label> <input type="text" id="mob" name="mob" placeholder="" class="form-control" onblur="validate1(4)"> </div>


                        <div class="row justify-content-center"> 
                            <button class="btn btn-secondary prev mx-2">
                                <span class="fa fa-long-arrow-left">
                                </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next2" onclick="validate1(0)">
                                Next<span class="fa fa-long-arrow-right"></span>
                            </button> 
                        </div>
                    </div>


                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">Website details</h4> <label class="text-danger mb-3">* Required</label>
                        <div class="form-group"> <label class="form-control-label">Company Name :</label> <input type="text" id="cname" name="cname" placeholder="" class="form-control" onblur="validate2(1)"> </div>
                        <div class="form-group"> <label class="form-control-label">Zip Code :</label> <input type="text" id="zip" name="zip" placeholder="" class="form-control" onblur="validate2(2)"> </div>
                        <div class="form-group"> <label class="form-control-label">Website Title * :</label> <input type="text" id="title" name="title" placeholder="" class="form-control" onblur="validate2(3)"> </div>
                        <div class="form-group"> <label class="form-control-label">Website Description * :</label> <input type="text" id="desc" name="desc" placeholder="" class="form-control" onblur="validate2(4)"> </div>
                        <div class="form-group"> <label class="form-control-label">Website Type :</label>
                            <div class="select mb-3"> 
                                <select name="type-info" class="form-control">
                                    <option>E-commerce</option>
                                    <option>Entertainment</option>
                                    <option>Personal</option>
                                    <option>Business</option>
                                    <option>Portfolio</option>
                                    <option>Education</option>
                                </select> 
                            </div>
                        </div>
                        <div class="row justify-content-center">
                             <button class="btn btn-secondary prev mx-2">
                                 <span class="fa fa-long-arrow-left">
                                 </span>Back
                            </button> 
                            <button class="btn btn-blue next mx-2" id="next3" onclick="validate2(0)">
                                Next<span class="fa fa-long-arrow-right">
                                </span>
                            </button> 
                        </div>
                    </div>


                    <div class="card-body pt-0">
                        <h4 class="heading mb-4 pb-1">Confirmation</h4>
                        <div class="row justify-content-start px-3">
                            <p>Form has been submitted Successfully ! <br>You will recieve estimation on your email id and contact no.</p>
                        </div>
                        <div class="row justify-content-center"> <img src="https://i.imgur.com/krsWHvd.gif" class="check"> </div>
                    </div>

                   <!--footer--> 
                                <div class="text-md-center">
                                <h5 class="yellow-text">Tiendas La Número 1 © 2020</h5>
                                </div>

                                <div class="text-left">
                                <h5 class="black-text">Call us</h5>
                                <h5><span class="fa fa-phone pr-3"></span>123 456 7891</h5>
                            </div>

                </div>
            </div>
        </div>

    </div>



    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>

//------------------------------------------------------------
    function validate1(val) {
        v1 = document.getElementById("fname");
        v2 = document.getElementById("lname");
        v3 = document.getElementById("email");
        v4 = document.getElementById("mob");

        flag1 = true;
        flag2 = true;
        flag3 = true;
        flag4 = true;

        if(val>=1 || val==0) {
        if(v1.value == "") {
        v1.style.borderColor = "red";
        flag1 = false;
        }
        else {
        v1.style.borderColor = "green";
        flag1 = true;
        }
        }

        if(val>=2 || val==0) {
        if(v2.value == "") {
        v2.style.borderColor = "red";
        flag2 = false;
        }
        else {
        v2.style.borderColor = "green";
        flag2 = true;
        }
        }

        if(val>=3 || val==0) {
        if(v3.value == "") {
        v3.style.borderColor = "red";
        flag3 = false;
        }
        else {
        v3.style.borderColor = "green";
        flag3 = true;
        }
        }

        if(val>=4 || val==0) {
        if(v4.value == "") {
        v4.style.borderColor = "red";
        flag4 = false;
        }
        else {
        v4.style.borderColor = "green";
        flag4 = true;
        }
        }

        flag = flag1 && flag2 && flag3 && flag4;

        return flag;
    }

//------------------------------------------------------------



    function validate2(val) {
        v3 = document.getElementById("title");
        v4 = document.getElementById("desc");

        flag3 = true;
        flag4 = true;

        if(val>=3 || val==0) {
        if(v3.value == "") {
        v3.style.borderColor = "red";
        flag3 = false;
        }
        else {
        v3.style.borderColor = "green";
        flag3 = true;
        }
        }

        if(val>=4 || val==0) {
        if(v4.value == "") {
        v4.style.borderColor = "red";
        flag4 = false;
        }
        else {
        v4.style.borderColor = "green";
        flag4 = true;
        }
        }

        flag = flag3 && flag4;

        return flag;
    }

    //------------------------------------------------------------


    $(document).ready(function(){

        var current_fs, next_fs, previous_fs;

        var steps = $(".card-body").length;
        var current = 1;
        setProgressBar(current);

        $(".next").click(function(){

        str1 = "next1";
        str2 = "next2";
        str3 = "next3";

        if(!str2.localeCompare($(this).attr('id')) && validate1(0) == true) {
        val2 = true;
        }
        else {
        val2 = false;
        }

        if(!str3.localeCompare($(this).attr('id')) && validate2(0) == true) {
        val3 = true;
        }
        else {
        val3 = false;
        }

        if((!str1.localeCompare($(this).attr('id'))) || (!str2.localeCompare($(this).attr('id')) && val2 == true) || (!str3.localeCompare($(this).attr('id')) && val3 == true)) {
        current_fs = $(this).parent().parent();
        next_fs = $(this).parent().parent().next();

        $(current_fs).removeClass("show");
        $(next_fs).addClass("show");

        current_fs.animate({}, {
        step: function() {

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });

        next_fs.css({
        'display': 'block'
        });
        }
        });
        setProgressBar(++current);
        var c = document.getElementById('cnt').textContent;
        document.getElementById('cnt').textContent = Number(c) + 12.5;
        }
        });

        $(".prev").click(function(){

        current_fs = $(this).parent().parent();
        previous_fs = $(this).parent().parent().prev();

        $(current_fs).removeClass("show");
        $(previous_fs).addClass("show");

        current_fs.animate({}, {
        step: function() {

        current_fs.css({
        'display': 'none',
        'position': 'relative'
        });

        previous_fs.css({
        'display': 'block'
        });
        }
        });
        setProgressBar(--current);
        var c = document.getElementById('cnt').textContent;
        document.getElementById('cnt').textContent = Number(c) - 12.5;
        });

        function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar").css("width",percent+"%");
        }

        $('.radio-group .radio').click(function(){
        $('.selected .fa').removeClass('fa-check');
        $('.selected .fa').addClass('fa-circle');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
        $('.selected .fa').removeClass('fa-circle');
        $('.selected .fa').addClass('fa-check');
        });

    });
</script>
  


</body>
</html>