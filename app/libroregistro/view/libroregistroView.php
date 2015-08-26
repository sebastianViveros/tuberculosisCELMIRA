<!DOCTYPE html>
<html>
    <head>
        <title>Proyecto TB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container container-fluid">
            <?php include '../app/default/view/menu.php' ?>
            <div class="contenido col-sm-6">
                <div class="page-header">
                    <h1><i class="glyphicon glyphicon-user"></i> Libro de resgitro</h1>
                </div>
                <form class="form-horizontal" >
                    <fieldset>
                        <legend>Datos del paciente</legend>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Fecha de ingreso</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-sm-4 control-label">Trimestre </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2
                                    </option>
                                    <option>
                                       3
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Primer apellido</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Primer apellido" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Segundo apellido</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Segundo apellido" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Nombre(s)</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Nombre(s)" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Identificacion</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Indentificacion" >
                            </div>
                        </div>
                           <div class="form-group">
                            <label class="col-sm-4 control-label">Etnia </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Indigena 
                                    </option>
                                    <option>
                                       Afrodecendiente 
                                    </option>
                                    <option>
                                       Mulato 
                                    </option>
                                </select>
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-4 control-label">Pueblo Indigena </label>
                            <div class="col-sm-8">
                                <select class="form-control" >
                                    <option>
                                       Woanan
                                    </option>
                                    <option>
                                       Embera 
                                    </option>
                                </select>
                            </div>
                        </div><div class="form-group">
                            <label class="col-sm-4 control-label">Condicion de vulnerabilidad </label>
                            <div class="col-sm-8">
                                <select class="form-control" >
                                    <option>
                                       Woanan
                                    </option>
                                    <option>
                                       Embera 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Poblacion de riesgo </label>
                            <div class="col-sm-8">
                                <select class="form-control" >
                                    <option>
                                       1
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-4 control-label">Municipio </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Cali
                                    </option>
                                    <option>
                                       Yumbo 
                                    </option>
                                    <option>
                                       Bogota 
                                    </option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                            <label class="col-sm-4 control-label">Direccion</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Direccion" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Barrio / Vereda</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Barrio o vereda" >
                            </div>
                        </div>
                    <div class="form-group">
                            <label class="col-sm-4 control-label">Comuna </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-4 control-label">Telefono</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="555-5555" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Aseguramiento </label>
                            <div class="col-sm-8">
                                <select class="form-control" >
                                    <option>
                                       Confenalco
                                    </option>
                                    <option>
                                       Coomeva 
                                    </option>
                                    <option>
                                       Uni salud 
                                    </option>
                                </select>
                            </div>
                        </div>
                     <div class="form-group">
                            <label class="col-sm-4 control-label">Eps </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Comfenalco 
                                    </option>
                                    <option>
                                       Comfandi
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Ips </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Ips1 
                                    </option>
                                    <option>
                                       Ips2
                                    </option>
                                </select>
                            </div>
                        </div>
                       
                      
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Sexo </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Masculino
                                    </option>
                                    <option>
                                       Femenino 
                                    </option>
                                    <option>
                                       Otro 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Fecha de Nacimiento</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-4 control-label">Edad</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    <div class="form-group">
                            <label class="col-sm-4 control-label">Tipo TB </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Tipo Tb 1 
                                    </option>
                                    <option>
                                        Tipo Tb 2
                                    </option>
                                    <option>
                                        Tipo Tb 3
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                        
                            <label class="col-sm-4 control-label">Localizacion TB </label>
                            <div class="col-sm-8">
                                <select class="form-control" i>
                                    <option>
                                        1
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                    <option>
                                       3 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Condicion de ingreso </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Si 
                                    </option>
                                    <option>
                                       No 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                     </fieldset>
                   
                </form>
            </div>
            <div class="contenido col-sm-6">
                
                <form class="form-horizontal" >
                    <br>
                   <legend>Fehca de Diagnostico y resultado</legend>

                        <div class="form-group">
                            <label class="col-sm-1 control-label">Basiloscopia </label>
                          </div>
                          <div class="form-group">  
                            <label class="col-sm-4 control-label">Fecha </label>
                            <div class="col-sm-8">
                                <div class="col-sm-12">
                                <input type="date" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Resultado </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Resultado 
                                    </option>
                                    <option>
                                       No 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        
                     <div class="form-group">
                            <label class="col-sm-1 control-label">Cultivo </label>
                          </div>
                          <div class="form-group">  
                            <label class="col-sm-4 control-label">Fecha </label>
                            <div class="col-sm-8">
                                <div class="col-sm-12">
                                <input type="date" class="form-control">
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Resultado </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Resultado 
                                    </option>
                                    <option>
                                       No 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>


                        <legend>Controles Microbiologicos</legend>

                        <div class="form-group">
                            <label class="col-sm-4 control-label">Mes </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>  
                        <hr>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Concejeria </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">1ra Prubea VIH</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">2da Prubea VIH</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">VIH Confirmado </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Si
                                    </option>
                                    <option>
                                       No 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">ARV </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Trimetropin </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Prueba de sensibilidad </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Realizacion de Prueba de sensibilidad </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       Si 
                                    </option>
                                    <option>
                                       No
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Toma de muestra</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Resultado prueba sensiblidad </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Paciente notificado al Sivigila</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Paciente captado por </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Condicion de egreso </label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>
                                       1 
                                    </option>
                                    <option>
                                       2 
                                    </option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Fecha de egreso</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Observaciones</label>
                            <div class="col-sm-8">
                                <textarea  type="text" class="form-control"></textarea>
                            </div>
                        </div>
                        
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <center><button type="submit" class="btn btn-danger">Registrar</button></center>
                        </div>
                    </div>

                  <a href="inicio.html" role="button" aria-expanded="false">
                       Inicio
                    </a>
                           
                        </div>


                </form>
            </div>

            
        </div>
    </body>
    <hr>
            <center><p id="foot">
                Sistema desarrollado por los alumnos de la ficha 628867 del SENA (CDTI)
            </p></center>
</html>