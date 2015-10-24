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
                            <label class="col-sm-2 control-label">Numero Orden </label>
                            <div class="col-sm-8">
                              <select class="form-control" name="quimio[numeroOrden]">
                                  
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-2 control-label">Fecha de ingreso</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="quimio[fechaIngreso]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Trimestre </label>
                            <div class="col-sm-8">
                              <select class="form-control" name="quimio[trimestre]">
                                  <option value="">Seleccione</option>
                                    <option value="1">
                                       1 
                                    </option>
                                    <option value="2">
                                       2
                                    </option>
                                    <option value="3">
                                       3
                                    </option>
                                    <option value="4">
                                       4
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" enabled name=quimio[nombre]>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Apellido" enabled name=quimio[apellido]>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Telefono </label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Telefono" enabled name=quimio[telefono]>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Fecha de Nacimiento </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputPassword3" enabled name=quimio[fechadenacimiento]>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Edad </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Edad" enabled name=quimio[edad]>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Direccion </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" placeholder="Direccion" name=quimio[direccion]>
                            </div>
                        </div>
                        
                    
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Etnia </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" enabled name=quimio[etnia]>
                                     <option value="">Seleccione</option>
                                    <option value="1">
                                       Indigena 
                                    </option>
                                    <option value="2">
                                       Afrodecendiente 
                                    </option>
                                    <option value="3">
                                       Mestizo
                                    </option>
                                    <option value="4">
                                       Raizal
                                    </option>
                                    <option value="5">
                                       Room(Gitano)
                                    </option>
                                    <option value="6">
                                       Palenquero
                                    </option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Municipio </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" enabled name=quimio[municipio]>
                                     <option value="1">
                                       Alcala
                                    </option>
                                    <option value="2">
                                       Andalucia
                                    </option>
                                    <option value="3">
                                       Ansermanuevo
                                    </option>
                                    <option value="4">
                                       Argelia
                                    </option>
                                    <option value="5">
                                       Bolivar
                                    </option>
                                    <option value="6">
                                       Buenaventura
                                    </option>
                                    <option value="7">
                                       Buga
                                    </option>
                                    <option value="8">
                                       Bugalagrande
                                    </option>
                                    <option value="9">
                                       Caicedonia
                                    </option>
                                    <option value="10">
                                       Cali
                                    </option>
                                    <option value="11">
                                       Calima-darien
                                    </option>
                                    <option value="12">
                                       Candelaria
                                    </option>
                                    <option value="13">
                                       Cartago
                                    </option>
                                    <option value="14">
                                       Dagua
                                    </option>
                                    <option value="15">
                                       El aguila
                                    </option>
                                    <option value="16">
                                       El cairo
                                    </option>
                                    <option value="17">
                                       El Cerrito
                                    </option>
                                    <option value="18">
                                       El dovio
                                    </option>
                                    <option value="19">
                                       Florida
                                    </option>
                                    <option value="20">
                                       Ginebra
                                    </option>
                                    <option value="21">
                                       Guacari
                                    </option>
                                    <option value="22">
                                       Jamundi
                                    </option>
                                    <option value="23">
                                       La cumbre
                                    </option>
                                    <option value="24">
                                       La union
                                    </option>
                                    <option value="25">
                                       La victoria
                                    </option>
                                    <option value="26">
                                       Obando
                                    </option>
                                    <option value="27">
                                       Palmira
                                    </option>
                                    <option value="28">
                                       Pradera
                                    </option>
                                    <option value="29">
                                       Restrepo
                                    </option>
                                    <option vaue="30">
                                       Rio frio
                                    </option>
                                    <option value="31">
                                       Roldanillo
                                    </option>
                                    <option value="32">
                                       San pedro
                                    </option>
                                    <option value="33">
                                       Sevilla
                                    </option>
                                    <option value="34">
                                       Toro
                                    </option>
                                    <option value="35">
                                       Trujillo
                                    </option>
                                    <option value="36">
                                       Tulua
                                    </option>
                                    <option valu="37">
                                       Ulloa
                                    </option>
                                    <option valu="38">
                                       Versalles
                                    </option>
                                    <option value="39">
                                       Vijes
                                    </option>
                                    <option value="40">
                                       Yotoco
                                    </option>
                                    <option value="41">
                                       Yumbo
                                    </option>
                                    <option value="42">
                                       Zarzal
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Barrio </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" placeholder="Barrio" name=quimio[barrio]>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Comuna </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input" placeholder="Comuna" name=quimio[comuna]>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Telefono</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="555-5555" name=quimio[telefono]>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Aseguramiento </label>
                            <div class="col-sm-10">
                              
                                <select class="form-control" name=libro[Aseguramiento]>
                                  <option value="">Seleccione</option>  
                                  <option value="1">
                                       Contributivo
                                    </option>
                                    <option value="2">
                                       Subsidiado
                                    </option>
                                    <option value="3">
                                       No asegurado 
                                    </option>
                                    <option value="4">
                                       Excepcion
                                    </option>
                                </select>
                            </div>
                        </div>
                            
                            <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">EPS</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" enabled name=quimio[eps]>
                                    <option value="1">
                                       Unisalud Palmira
                                    </option>
                                    <option value="2">
                                       Univalle
                                    </option>
                                    <option value="3">
                                       Otra Eps
                                    </option>
                                </select>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Sexo </label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" enabled name=quimio[sexo]>
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
                           
                             <label for="inputPassword3" class="col-sm-2 control-label">Departamento</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="inputPassword3" enabled name=quimio[departamento]>
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
                                <select class="form-control" id="inputPassword3" name=quimio[criteriodequimioprofilaxis]>
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
                                <select class="form-control" id="inputPassword3" name=quimio[tuberculosisactiva]>
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
                                <input type="date" class="form-control" id="inputPassword3" name=quimio[fechadeegreso]>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Observaciones </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Observaciones" name=quimio[observaciones]>
                            </div>
                        </div>
                        
                    <div class="form-group">
                        <div class="col-sm-offset-6 col-sm-12">
                            <button type="submit" class="btn btn-default" name=quimio[registrar]>Registrar</button>
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