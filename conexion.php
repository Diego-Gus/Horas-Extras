<?php 

    $host = "localhost";
    $dbname = "horasextras";
    $dbuser = "root";
    $userpass = "";

    $dsn = "mysql:host=" . $host . ";dbname=" . $dbname;

    try {
        //Conexion PDO
        $conn = new PDO($dsn, $dbuser, $userpass);

        if($conn){
            // echo "Conectado a la base $dbname correctamente!";
            echo "\n";
        }
    } catch (PDOException $error) {
        //Si hay error en la conexión mostrarlo
        echo $error->getMessage();
    }

?>