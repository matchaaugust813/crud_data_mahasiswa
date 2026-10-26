<?php

include "config.php";

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id = '$id'";

mysqli_query($config, $query);

header("Location: index.php");

?>