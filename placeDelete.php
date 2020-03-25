<?php

require 'PetturyDBConfig.php';

//validate
if (!$mysqli)
{
    echo "error : " . mysqli_connect_error();
    exit();
}

//prepare argument
$UID    = $_POST['UID'];

//prepare query
$stmt   = "DELETE FROM places WHERE UID = '$UID'";

//execute query
if (mysqli_query($mysqli, $stmt))
{
    $res = "Data Deleted Successfully";
    echo json_encode($res);
}
else
{
    $error = mysqli_error($mysqli);
    echo json_encode($error);
}

?>