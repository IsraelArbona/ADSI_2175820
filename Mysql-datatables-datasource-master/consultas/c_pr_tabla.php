<?php
    require_once '../conexion/conexion.php';
    
    $db = new db_conexion();

    $sql="SELECT id, nombre, apellido_1, apellido_2, estado FROM pr_tabla";
    $resultado=mysqli_query($db->conectar(),$sql);
    while($registro=mysqli_fetch_array($resultado)){
         $data[] = $registro;
      };

      $resultado = ["sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data];

      echo json_encode($resultado);

      $db->db_cerrar();
 

?>
