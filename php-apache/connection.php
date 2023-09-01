<?php
    try {
        $password = "postgres";
        $user = "postgres";
        $dbname = "mydb";
        $host = "172.17.0.2";
        $port = "5432";
        
        $conexion = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($conexion){
            echo "Conexion exitosa";
            $clave = $_POST['clave'];
            $nombre = $_POST['nombre'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];

            $sql = "INSERT INTO ejemplo (clave, nombre, direccion, telefono) VALUES (:clave, :nombre, :direccion, :telefono)";
            $statement = $conexion->prepare($sql);
            
            $statement->bindParam(':clave', $clave);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':direccion', $direccion);
            $statement->bindParam(':telefono', $telefono);
            
            $statement->execute();
            
            $conexion = null;
            echo "<BR>Datos insertados correctamente";
        }
    } catch (PDOException $e) {
        echo "Error al insertar los datos: " . $e->getMessage();
    }
?>