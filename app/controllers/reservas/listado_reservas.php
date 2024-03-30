<?php

$sql = "SELECT *, usu.nombre_completo as nombre_completo, usu.email as email FROM tb_reservas as res INNER JOIN tb_usuarios as usu ON usu.id_usuario = res.id_usuario";
$query = $pdo->prepare($sql);
$query->execute();
$reservas = $query->fetchAll(PDO::FETCH_ASSOC);

?>