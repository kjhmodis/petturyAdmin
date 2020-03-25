<?php

require 'PetturyDBConfig.php';

//validate
if (!$mysqli)
{
    echo "error : " . mysqli_connect_error();
    exit();
}

//prepare arguments
$placeName          = $_POST['placeName'];
$placeType          = $_POST['placeType'];
$phoneNum           = $_POST['phoneNum'];
$latitude           = $_POST['latitude'];
$longitude          = $_POST['longitude'];

$blogURL            = $_POST['blogURL'];
$naverDetailURL     = $_POST['naverDetailURL'];
$websiteURL         = $_POST['websiteURL'];
$doroAddress        = $_POST['doroAddress'];
$bunjiAddress       = $_POST['bunjiAddress'];
$holidayTime        = $_POST['holidayTime'];
$sundayTime         = $_POST['sundayTime'];
$saturdayTime       = $_POST['saturdayTime'];
$weekdayTime        = $_POST['weekdayTime'];

$open24HR           = $_POST['open24HR'];

$hasSwimPool        = $_POST['hasSwimPool'];
$hasIndoorEntrance  = $_POST['hasIndoorEntrance'];
$hasOutdoorEntrance = $_POST['hasOutdoorEntrance'];
$hasAdoption        = $_POST['hasAdoption'];
$hasTraining        = $_POST['hasTraining'];
$hasKindergarten    = $_POST['hasKindergarten'];
$hasFuneral         = $_POST['hasFuneral'];
$hasGoods           = $_POST['hasGoods'];
$hasDiet            = $_POST['hasDiet'];

$hasCatHotel        = $_POST['hasCatHotel'];
$hasBigDogHotel     = $_POST['hasBigDogHotel'];
$hasSmallDogHotel   = $_POST['hasSmallDogHotel'];

$hasSelfGroom       = $_POST['hasSelfGroom'];
$hasCatAnesGroom    = $_POST['hasCatAnesGroom'];
$hasCatGroom        = $_POST['hasCatGroom'];
$hasBigDogGroom     = $_POST['hasBigDogGroom'];
$hasSmallDogGroom   = $_POST['hasSmallDogGroom'];

//prepare query
$stmt               = "INSERT INTO places (placeName, placeType, phoneNum, latitude, longitude, blogURL, naverDetailURL, 
                                           websiteURL, doroAddress, bunjiAddress, holidayTime, sundayTime, saturdayTime, 
                                           weekdayTime, open24HR, hasSwimPool, hasIndoorEntrance, hasOutdoorEntrance,
                                           hasAdoption, hasTraining, hasKindergarten, hasFuneral, hasGoods, hasDiet, 
                                           hasCatHotel, hasBigDogHotel, hasSmallDogHotel, hasSelfGroom, hasCatAnesGroom, 
                                           hasCatGroom, hasBigDogGroom, hasSmallDogGroom) 
                       
                       VALUES ('$placeName', '$placeType', '$phoneNum', '$latitude', '$longitude', '$blogURL', 
                               '$naverDetailURL', '$websiteURL', '$doroAddress', '$bunjiAddress', '$holidayTime',
                               '$sundayTime', '$saturdayTime', '$weekdayTime', '$open24HR', '$hasSwimPool',
                               '$hasIndoorEntrance', '$hasOutdoorEntrance', '$hasAdoption', '$hasTraining', 
                               '$hasKindergarten', '$hasFuneral', '$hasGoods', '$hasDiet', '$hasCatHotel', 
                               '$hasBigDogHotel', '$hasSmallDogHotel', '$hasSelfGroom', '$hasCatAnesGroom',
                               '$hasCatGroom', '$hasBigDogGroom', '$hasSmallDogGroom')";

//execute query
if (mysqli_query($mysqli, $stmt))
{
    $res = "Data Inserted Successfully";
    echo json_encode($res);
}
else
{
    $error = mysqli_error($mysqli);
    echo json_encode($error);
}

?>