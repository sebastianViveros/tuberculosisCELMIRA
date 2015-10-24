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
                <input type="date" class="form-control" name="libro[fechaIngreso]">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Trimestre </label>
              <div class="col-sm-8">
                <select class="form-control" name="libro[trimestre]">
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
                <select class="form-control"name="Etnia">
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
              <label class="col-sm-4 control-label">Pueblo Indigena </label>
              <div class="col-sm-8">
                <select class="form-control"name="Pueblo Indigena">
                  <option value="">Seleccione</option>
                  <option value="1">
                    Woanan
                  </option>
                  <option value="2">
                    Embera 
                  </option>
                  <option value="3">
                    Eperara siapidara
                  </option>
                  <option value="4">
                    Inga
                  </option>
                  <option value="5">
                    Nasa/Paez
                  </option>
                  <option value="6">
                    Otro
                  </option>
                  <option value="7">
                    No aplica
                  </option>
                </select>
              </div>
            </div><div class="form-group">
              <label class="col-sm-4 control-label">Condicion de vulnerabilidad </label>
              <div class="col-sm-8">
                <select class="form-control" name="Condicion de Vulnerabilidad">
                  <option value="">Seleccione</option>
                  <option value="1">
                    Privado de la liberta PPL
                  </option>
                  <option value="2">
                    Farmacodependencia (alcohol,tabaco y/O drogas)
                  </option>
                  <option value="3">
                    Habitante de/en calle
                  </option>
                  <option value="4">
                    Persona con discapacidad 
                  </option>
                  <option value="5">
                    Victima del conflicto armado (desplazado,etc)
                  </option>
                  <option value="6">
                    Otra vulnerabilidad 
                  </option>
                  <option value="7">
                    Ninguna vulnerabilidad 
                  </option>

                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Poblacion de riesgo </label>
              <div class="col-sm-8">
                <select class="form-control" name="Poblacion de Riesgo">
                  <option value="">Seleccione</option>
                  <option value="1">
                    Diabetes
                  </option>
                  <option value="2">
                    Malnutricion
                  </option>
                  <option value="3">
                    Personal de salud 
                  </option>
                  <option value="4">
                    Enfermedad renal
                  </option>
                  <option value="5">
                    Embarazada
                  </option>
                  <option value="6">
                    Epoc
                  </option>
                  <option value="7">
                    Artritis rematoidea
                  </option>
                  <option value="8">
                    Enfermedad hepatica 
                  </option>
                  <option value="9">
                    Cancer
                  </option>
                  <option value="10">
                    Otros
                  </option>
                  <option value="11">
                    Ningun riesgo
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Municipio </label>
              <div class="col-sm-8">
                <select class="form-control" name="Municipio">
                  <option value="">Seleccione</option>
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
              <label class="col-sm-4 control-label">Direccion</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Direccion" >
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Barrio / Vereda</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Barrio vereda" name=libro[barrioVereda]>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Comuna </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[Comuna]>
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
                  <option value="5">
                    5
                  </option>
                  <option value="6">
                    6
                  </option>
                  <option value="7">
                    7
                  </option>
                  <option value="8">
                    8
                  </option>
                  <option value="9">
                    9
                  </option>
                  <option value="10">
                    10
                  </option>
                  <option value="11">
                    11
                  </option>
                  <option value="12">
                    12
                  </option>
                  <option value="13">
                    13
                  </option>
                  <option vaalue="14">
                    14
                  </option>
                  <option value="15">
                    15
                  </option>
                  <option value="16">
                    16
                  </option>
                  <option value="17">
                    17
                  </option>
                  <option value="18">
                    18
                  </option>
                  <option value="19">
                    19
                  </option>
                  <option value="20">
                    20
                  </option>
                  <option value="21">
                    21
                  </option>
                  <option value="22">
                    22
                  </option>
                  <option value="23">
                    100
                  </option>
                  <option value="24">
                    No aplica
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Telefono</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="555-5555" name=libro[telefono]>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Aseguramiento </label>
              <div class="col-sm-8">
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
              <label class="col-sm-4 control-label">Eps </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[EPS]>
                  <option value="">Seleccione</option>
                  <option value="1">
                    Asmet salud
                  </option>
                  <option value="2">
                    Asociación de indígenas del cauca- AIC- EPS indígena
                  </option>
                  <option value="3">
                    Barrios unidos de Quibdó  EPS AMBUQ -ess
                  </option>
                  <option value="4">
                    Cafesalud
                  </option>
                  <option value="5">
                    Caprecom
                  </option>
                  <option value="6">
                    Colmedica
                  </option>
                  <option value="7">
                    Coomeva
                  </option>
                  <option value="8">
                    Coosalud
                  </option>
                  <option value="9">
                    Cosmitet
                  </option>
                  <option value="10">
                    Cruz blanca
                  </option>
                  <option value="11">
                    Emssanar
                  </option>
                  <option value="12">
                    Eps sanitas
                  </option>
                  <option value="13">
                    Fondo de pasivo social de ferrocarriles nacionales de Colombia
                  </option>
                  <option value="14">
                    Mallamas
                  </option>
                  <option value="15">
                    Nueva eps
                  </option>
                  <option value="16">
                    Salud totol
                  </option>
                  <option value="17">
                    Saludcoop
                  </option>
                  <option value="18">
                    Servicios de occidente de salud sos
                  </option>
                  <option value="19">
                    Ssmpal
                  </option>
                  <option value="20">
                    Unisalud palmira
                  </option>
                  <option value="21">
                    Univalle
                  </option>
                  <option value="22">
                    Otra eps
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Ips </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[IPS]>
                  <option value="">Seleccione</option>
                  <option value="1">
                    Ips1 
                  </option>

                </select>
              </div>
            </div>


            <div class="form-group">
              <label class="col-sm-4 control-label">Sexo </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[Sexo]>
                  <option value="">Seleccione</option>
                  <option value="1">
                    Masculino
                  </option>
                  <option value="2">
                    Femenino 
                  </option>
                  <option value="3">
                    Otro 
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Fecha de Nacimiento</label>
              <div class="col-sm-8">
                <input type="date" class="form-control" name=libro[fechadenacimiento]>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Edad</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name=libro[edad]>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Tipo TB </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[TipoTB]>
                  <option value="">Seleccione</option>
                  <option value="1">
                    Pulmonar
                  </option>
                  <option value="2">
                    Extrapulmonar
                  </option>
                  <option value="3">
                    Meningea
                  </option>
                </select>
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-4 control-label">Localizacion TB </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[LocalizacionTB]>
                  <option value="">Seleccione</option>
                  <option value="1">
                    Pulmon
                  </option>
                  <option value="2">
                    Meningea
                  </option>
                  <option value="3">
                    Pleural
                  </option>
                  <option value="4">
                    Pericardia
                  </option>
                  <option value="5">
                    Ganglionar
                  </option>
                  <option value="6">
                    Renal
                  </option>
                  <option value="7">
                    Miliar
                  </option>
                  <option value="8">
                    Intestinal
                  </option>
                  <option value="9">
                    Cutanea
                  </option>
                  <option value="10">
                    Osteoarticular
                  </option>
                  <option value="11">
                    Otro
                  </option>
                  <option value="12">
                    Genitourinaria
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">Condicion de ingreso </label>
              <div class="col-sm-8">
                <select class="form-control" name=libro[CondiciondeIngreso]>
                  <option value="">Seleccione</option>
                  <option vaue="1">
                    Nuevo
                  </option>
                  <option value="2">
                    Recaida
                  </option>
                  <option value="3">
                    Abandono
                  </option>
                  <option vaue="4">
                    Fracaso
                  </option>
                  <option value="5">
                    Remitido
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

          <div class="form-group" name=libro[fechadediagnosticoresultado]>
            <label class="col-sm-1 control-label">Basiloscopia </label>
          </div>
          <div class="form-group" name=libro[basiloscopia]>  
            <label class="col-sm-4 control-label">Fecha </label>
            <div class="col-sm-8">
              <div class="col-sm-12">
                <input type="date" class="form-control" name=libro[fecha]>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Resultado </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Resultado]>
                <option value="">Seleccione</option>
                <option value="1">
                  +
                </option>
                <option vaue="2">
                  ++
                </option>
                <option value="3">
                  +++
                </option>
                <option value="4">
                  -
                </option>
                <option value="5">
                  No realizado
                </option>

              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-1 control-label">Cultivo </label>
          </div>
          <div class="form-group" name=libro[cultivo]>  
            <label class="col-sm-4 control-label">Fecha </label>
            <div class="col-sm-8">
              <div class="col-sm-12">
                <input type="date" class="form-control" name=libro[fechacultivo]>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Resultado </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Resusltado]>
                <option value="">Seleccione</option>
                <option value="1">
                  +
                </option>
                <option value="2">
                  ++ 
                </option>
                <option value="3">
                  +++
                </option>
                <option value="4">
                  -
                </option>
                <option value="5">
                  No realizado
                </option>
                <option value="6">
                  En proceso
                </option>
                <option value="7">
                  Contaminado
                </option>

              </select>
            </div>
          </div>


          <legend>Controles Microbiologicos</legend>

          <div class="form-group">
            <label class="col-sm-4 control-label">Mes </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Mes]>
                <option value="1">
                  2 
                </option>
                <option value="2">
                  4 
                </option>

              </select>
            </div>
          </div>  
          <hr>
          <div class="form-group">
            <label class="col-sm-4 control-label">Concejeria </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Concejeria]>
                <option value="">Seleccione</option>
                <option vaue="1">
                  Si
                </option>
                <option value="2">
                  No
                </option>
                <option value="3">
                  No aplica
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Fecha para 1raPrueba VIH</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name=libro[fechapara1rapruebaVIH]>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">1ra Prubea VIH</label>
            <div class="col-sm-8">

              <select class="form-control" name=libro[1raPruebaVIH]>
                <option value="">Seleccione</option>
                <option value="1">
                  Pos
                </option>
                <option value="2">
                  Neg
                </option>
                <option vaue="3">
                  No realizado
                </option>
                <option value="4">
                  Usuario no acepta
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">2da Prueba VIH</label>
            <div class="col-sm-8">

              <select class="form-control" name=libro[2daPrueba]>
                <option value="1">
                  Pos
                </option>
                <option value="2">
                  Neg
                </option>
                <option value="3">
                  No realizado
                </option>
                <option value="4">
                  Usuario no acepta
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">VIH Confirmado </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[VIHConfirmado]>
                <option value="">Seleccione</option>
                <option value="1">
                  Pos
                </option>
                <option vaue="2">
                  Neg
                </option>
                <option value="3">
                  No realizado
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">ARV </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[ARV]>
                <option value="">Seleccione</option>
                <option value="1">
                  Si
                </option>
                <option value="2">
                  No
                </option>
                <option value="3">
                  No aplica
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Trimetropin sulfa/cotrimoxazol</label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Trimetropinsulfa/cotrimoxazol]>
                <option value="">Seleccione</option>
                <option value="1">
                  Si
                </option>
                <option value="2">
                  No
                </option>
                <option value="3">
                  No aplica
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Realizacion de Prueba de sensibilidad </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[RealizaciondePruebadeSensibilidad]>
                <option value="">Seleccione</option>
                <option value="1">
                  Si
                </option>
                <option value="2">
                  No
                </option>
                <option value="3">
                  No aplica
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">  
            <label class="col-sm-4 control-label">Fecha toma de muestras </label>
            <div class="col-sm-8">
              <div class="col-sm-12">
                <input type="date" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Resultado prueba sensiblidad </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Resultadopruebasensibilidad]
                      <option value="">Seleccione</option>
                <option value="1">
                  Resistente
                </option>
                <option value="2">
                  Sensible
                </option>
                <option  value="3">
                  No aplica
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Paciente notificado al Sivigila</label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[PacientenotificacionSivigila]>
                <option value="">Seleccione</option>
                <option value="1">
                  Si
                </option>
                <option value="2">
                  No
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Paciente captado por </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[Pacientecaptadopor]>
                <option value="">Seleccione</option>
                <option value="1">
                  Comunidad
                </option>
                <option value="2">
                  Institucion
                </option>

              </select>
            </div>
          </div>  
          <div class="form-group">
            <label class="col-sm-4 control-label">Condicion de egreso </label>
            <div class="col-sm-8">
              <select class="form-control" name=libro[CondiciondeEgreso]>
                <option value="Condicion de Egreso">
                <option value="1">
                  Curado
                </option>
                <option value="2">
                  Terminado
                </option>
                <option value="3">
                  Fracaso
                </option>
                <option value="4">
                  Abandono
                </option>
                <option value="5">
                  Remitido
                </option>
                <option value="6">
                  Resistente
                </option>
                <option value="7">
                  Fallecido TB 
                </option>
                <option value="8">
                  Fallecido no TB 
                </option>
                <option value="10">
                  Microbacteria no TB 
                </option>

              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Fecha de egreso</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" name=libro[fechaegreso]>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Observaciones</label>
            <div class="col-sm-8">
              <textarea  type="text" class="form-control" name=libro[observacion]></textarea>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <center><button type="submit" class="btn btn-danger" name=libro[registrar]>Registrar</button></center>
            </div>
          </div>



      </div>



    </div>


  </div>
</body>
<hr>
<center><p id="foot">
    Sistema desarrollado por los alumnos de la ficha 628867 del SENA (CDTI)
  </p></center>
</html>