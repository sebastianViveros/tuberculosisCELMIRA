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
                    <h1><i class="glyphicon glyphicon-heart-empty"></i> Quimioprofilaxis</h1>
                </div>
                <form class="form-horizontal" >
                    <fieldset>
                        <legend>Datos del paciente</legend>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Apellido" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Telefono </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Telefono" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Fecha de Nacimiento </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputPassword3" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Edad </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Edad" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Direccion </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" placeholder="Direccion" >
                            </div>
                        </div>
                        
                    
                    
                     <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Sexo </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" disabled>
                                    <option>
                                       Masculino 
                                    </option>
                                    <option>
                                       Femenino 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Etnia </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" disabled>
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
                            <label for="inputPassword3" class="col-sm-2 control-label">Municipio </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" disabled>
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
                            <label for="inputPassword3" class="col-sm-2 control-label">Barrio </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" disabled>
                                    <option>
                                       Potrero
                                    </option>
                                    <option>
                                       Centro 
                                    </option>
                                    <option>
                                       Compartir 
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Pueblo Indigena </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" disabled>
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
                            <label for="inputPassword3" class="col-sm-3 control-label">Aseguramiento </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputPassword3" disabled>
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
                            <label for="inputPassword3" class="col-sm-3 control-label">Departamento </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputPassword3" disabled>
                                    <option>
                                       Valle del Cauca 
                                    </option>
                                    <option>
                                       Nariño 
                                    </option>
                                    <option>
                                       Antioquia 
                                    </option>
                                </select>
                            </div>
                        </div>
                     </fieldset>
                   
                </form>
            </div>
            <div class="contenido col-sm-6">
                
                <form class="form-horizontal" >
                  
                         <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Criterio de Quimioprofilaxis </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputPassword3">
                                    <option>
                                        VIH
                                    </option>
                                    <option>
                                       Diabetes 
                                    </option>
                                    <option>
                                       Cancer 
                                    </option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Tuberculosis Activa </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="inputPassword3">
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
                            <label for="inputPassword3" class="col-sm-3 control-label">Fecha de Egreso </label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Observaciones </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Observaciones">
                            </div>
                        </div>
                        
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <center><p id="foot">
                Sistema desarrollado por los alumnos de la ficha 628867 del SENA (CDTI)
            </p></center>
</html>