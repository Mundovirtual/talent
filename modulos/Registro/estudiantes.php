<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link href="../../fonts/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../../js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap/bootstrap.min.js"></script>

<script type="text/javascript">
    $.ajax  
</script>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Registro de Estudiantes
</button>

 
 <a class="btn btn-success btn-xl " href="../../index.html">Regresar</a>


<?php
include("../abrir_conexion.php");
$consulta ="SELECT * FROM estudiantes";
$ejecutar = $conexion->query($consulta);
?>
<div class="container ">
<table  class= "table table-striped" border="1">
    <tr>
    <th  scope="col">Nº estudiantes</th>
    <th  scope="col">Nombre</th>
    <th  scope="col">Apellido Paterno</th>
    <th  scope="col">Apellido Materno</th>
    <th  scope="col">Fecha de Inicio</th>
    <th  scope="col">Fecha Final</th>
    <th  scope="col">Nº de Escuelas</th>
    <th  scope="col">Correo</th>
    </tr>
</div>

<?php
while ($campo = $ejecutar->fetch_assoc()){
    $CE = $campo['id_estudiantes'];
    "<tr>";
    echo "<td>".$campo['id_estudiantes']."</td>";
    echo "<td>".$campo['nombre']."</td>";
    echo "<td>".$campo['apellido_pat']."</td>";
    echo "<td>".$campo['apellido_mat']."</td>";
    echo "<td>".$campo['fecha_inicio']."</td>";
    echo "<td>".$campo['fecha_final']."</td>";
    echo "<td>".$campo['escuelas_id']."</td>";
    echo "<td>".$campo['correo']."</td>";
    
    echo "</tr>";
}
echo "</table>";
?>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
    <form action="" type="POST" id="frmajax" class="">
    <br>
    <label for="nombre">Nombre del Estudiante:</label>
    <input class="form-control" id="nombre" type="text" name="nombre" placeholder="nombre">
    <br>
    <label for="apellido_paterno">Apellido Paterno:</label>
    <input class="form-control" id="apellido_paterno" type="text" name="apellido_paterno" placeholder="apellido paterno">
    <br>

    <label for="apellido_paterno">Apellido materno:</label>
    <input class="form-control" id="apellido_materno" name="apellido_materno" type="text" name="apellido_paterno" placeholder="apellido paterno">
    <br>


    <label for="fecha_inicio">fecha de inicio:</label>
    <input class="form-control" id="fecha_inicio" type="date" name="fecha_inicio" placeholder="fecha de inicio">
    <br>

    <label for="fecha_final">fecha final:</label>
    <input class="form-control" id="fecha_final"  name="fecha_final" type="date" placeholder="fecha final">
    <br>

    <label for="option">Elija el Plantel:</label>
    <select class="form-control" name="escuela" id="option  ">
        <?php 
    $consulta ="SELECT * FROM escuela";
    $ejecutar = $conexion->query($consulta);
    while ($campo = $ejecutar->fetch_assoc()){
    $E = $campo['id_escuela'];

    echo "<option value=".$E.">".$campo['institucion']."</option>";
}
    ?>
        
    </select>
   
   <label for="correo">correo:</label>
    <input class="form-control" id="correo"  name="correo" type="text" placeholder="correo">
    <br>

    
    </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnguardar" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('#btnguardar').click(function()
        {
            
            var datos=$('#frmajax').serialize();
            $.ajax(
            {
                type:"POST",
                url:"insertar_estudiantes.php",
                data:datos,
                success:function(){

                }
            });
            return false;
        });
    });
</script>

</body>

</html>
