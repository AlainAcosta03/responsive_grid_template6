<?php

   session_start();
   session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Personajes</title>
</head>
<body>
    <center>
        <tr>INDICE DE PERSONAJES</tr>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PERSONAJE</th>
                    <th>GUSTO</th>
                    <th>DISGUSTO</th>
                    <th>ALTURA</th>
                    <th>PPESO</th>
                    <th>IMAGENES</th>
                </tr>
            </thead>
            <!--------------------TITULOS-------------------->
            <tbody>
                <?php
                    include ("open.php");
                    $consulta = "SELECT * FROM personajes";
                    $resultado = $conexion->query($consulta);

                    while($row = $resultado->fetch_assoc()){
                ?>
                        <tr>
                            <td>    <?php   echo $row['id'];  ?>  </td>
                            <td>    <?php   echo $row['nombre'];  ?>  </td>
                            <td>    <?php   echo $row['gusto'];  ?>  </td>
                            <td>    <?php   echo $row['disgusto'];  ?>  </td>
                            <td>    <?php   echo $row['altura'];  ?>  </td>
                            <td>    <?php   echo $row['peso'];  ?>  </td>
                            <td>   <img height="100px" src="data:image/jpg;base64,<?php   echo base64_encode($row['Imagen']);  ?>">   </td>
                        </tr>

                    <?php
                    }
                    ?>
                
            </tbody>
        </table>
    </center>
    
</body>
</html>