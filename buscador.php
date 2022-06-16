<?php
$conexion=mysqli_connect('localhost','root','','taller');                       //Se hace conexion a la base de datos taller del worckbench.
$sql="SELECT id_estudiante,nombre FROM t_estudiantes";                          //Se hace referencia a los campos de la tabla y a la misma tabla.
$result=mysqli_query($conexion,$sql);
?>
                                                                        <!--Grid basica de html inicio... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
            crossorigin="anonymous"></script>
    <script src="js/select2.min.js"></script>
</head>
<body>
        <section style="text-align: center;">
            <select id="controlBuscador" style="width:50%">
                <?php while($ver=mysqli_fetch_row($result)){ ?>
                <option value="<?php echo $ver[0] ?>">
                    <?php echo $ver[1] ?>        
                </option>
                <?php }?>              
            </select>
        </section>
</body>
</html>
                                                                        <!--Final de la grid basica de html -->
<script>
    $(document).ready(function(){
        $('#controlBuscador').select2();
    });
</script>