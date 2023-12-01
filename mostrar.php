<?php 

$inc = include("con_db.php");
if($inc){
    $consulta = "SELECT * FROM Departamento";
    $result = mysqli_query($conex,$consulta);
    if($consulta){
        while($row = $result->fetch_array()){
            $id = $row["id"];
            $ubicacion = $row["ubicacion"];
            $jefe = $row["jefe"];
            $nombre = $row["nombre"];
        
            ?>
                <div>
                    <table>
                        <tr><?php echo $id?></tr>
                        <tr><?php echo $nombre?></tr>
                        <tr><?php echo $jefe?></tr>
                        <tr><?php echo $ubicacion?></tr>
                    </table>
                </div>
            <?php
        }
    }

}



?>