<?php
    require_once '../Conexion/Db_conexion.php';

    $db = new Db_conexion();

    $sql = "select id, nombre, apellido_1, apellido_2, estado from pr_tabla";
    $resultado = mysqli_query($db->conectar(),$sql);

    while($registro = mysqli_fetch_array($resultado)){
        $datos[] = $registro;
    }

    $resultado = [
        "sEcho" => 1,
        "iTotalDisplayRecords" => count($datos),
        "aaData" => $datos
    ];
    
    print(json_encode($resultado));

    $db->db_cerrar();

?>