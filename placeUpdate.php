<?php

require 'PetturyDBConfig.php';

//validate
if (!$mysqli)
{
    echo "error : " . mysqli_connect_error();
    exit();
}

//prepare arguments
$UID                = $_POST['UID'];
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
$stmt               = "UPDATE places SET placeName          = '".$placeName."',
                                         placeType          = '".$placeType."',
                                         phoneNum           = '".$phoneNum."',
                                         latitude           = '".$latitude."',
                                         longitude          = '".$longitude."',
                                         blogURL            = '".$blogURL."',
                                         naverDetailURL     = '".$naverDetailURL."',
                                         websiteURL         = '".$websiteURL."',
                                         doroAddress        = '".$doroAddress."',
                                         bunjiAddress       = '".$bunjiAddress."',
                                         holidayTime        = '".$holidayTime."',
                                         sundayTime         = '".$sundayTime."',
                                         saturdayTime       = '".$saturdayTime."',
                                         weekdayTime        = '".$weekdayTime."',
                                         open24HR           = '".$open24HR."',
                                         hasSwimPool        = '".$hasSwimPool."',
                                         hasIndoorEntrance  = '".$hasIndoorEntrance."',
                                         hasOutdoorEntrance = '".$hasOutdoorEntrance."',
                                         hasAdoption        = '".$hasAdoption."',
                                         hasTraining        = '".$hasTraining."',
                                         hasKindergarten    = '".$hasKindergarten."',
                                         hasFuneral         = '".$hasFuneral."',
                                         hasGoods           = '".$hasGoods."',
                                         hasDiet            = '".$hasDiet."',
                                         hasCatHotel        = '".$hasCatHotel."',
                                         hasBigDogHotel     = '".$hasBigDogHotel."',
                                         hasSmallDogHotel   = '".$hasSmallDogHotel."',
                                         hasSelfGroom       = '".$hasSelfGroom."',
                                         hasCatAnesGroom    = '".$hasCatAnesGroom."',
                                         hasCatGroom        = '".$hasCatGroom."',
                                         hasBigDogGroom     = '".$hasBigDogGroom."',
                                         hasSmallDogGroom   = '".$hasSmallDogGroom."'
                              
                       WHERE UID                            = '".$UID."'";

//execute query
if (mysqli_query($mysqli, $stmt))
{
    $res = "Data Updated Successfully";
    echo json_encode($res);
}
else
{
    $error = mysqli_error($mysqli);
    echo json_encode($error);
}

?>