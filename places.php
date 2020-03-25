<?php

require 'PetturyDBConfig.php';

//validate
if (!$mysqli)
{
    echo "error : " . mysqli_connect_error();
    exit();
}

//prepare query
$stmt                                   = "SELECT * FROM places";

//execute query
$result                                 = mysqli_query($mysqli, $stmt);
$rows                                   = array();


//iterate
while ($row = mysqli_fetch_array($result))
{
    //bind
    $row_array['UID']                   = $row['UID'];
    $row_array['placeName']             = $row['placeName'];
    $row_array['placeType']             = $row['placeType'];
    $row_array['phoneNum']              = $row['phoneNum'];
    $row_array['latitude']              = $row['latitude'];
    $row_array['longitude']             = $row['longitude'];

    $row_array['blogURL']               = $row['blogURL'];
    $row_array['naverDetailURL']        = $row['naverDetailURL'];
    $row_array['websiteURL']            = $row['websiteURL'];
    $row_array['doroAddress']           = $row['doroAddress'];
    $row_array['bunjiAddress']          = $row['bunjiAddress'];

    $row_array['holidayTime']           = $row['holidayTime'];
    $row_array['sundayTime']            = $row['sundayTime'];
    $row_array['saturdayTime']          = $row['saturdayTime'];
    $row_array['weekdayTime']           = $row['weekdayTime'];

    $row_array['open24HR']              = $row['open24HR'];

    $row_array['hasSwimPool']           = $row['hasSwimPool'];
    $row_array['hasIndoorEntrance']     = $row['hasIndoorEntrance'];
    $row_array['hasOutdoorEntrance']    = $row['hasOutdoorEntrance'];
    $row_array['hasAdoption']           = $row['hasAdoption'];
    $row_array['hasTraining']           = $row['hasTraining'];
    $row_array['hasKindergarten']       = $row['hasKindergarten'];
    $row_array['hasFuneral']            = $row['hasFuneral'];
    $row_array['hasGoods']              = $row['hasGoods'];
    $row_array['hasDiet']               = $row['hasDiet'];

    $row_array['hasCatHotel']           = $row['hasCatHotel'];
    $row_array['hasBigDogHotel']        = $row['hasBigDogHotel'];
    $row_array['hasSmallDogHotel']      = $row['hasSmallDogHotel'];

    $row_array['hasSelfGroom']          = $row['hasSelfGroom'];
    $row_array['hasCatAnesGroom']       = $row['hasCatAnesGroom'];
    $row_array['hasCatGroom']           = $row['hasCatGroom'];
    $row_array['hasBigDogGroom']        = $row['hasBigDogGroom'];
    $row_array['hasSmallDogGroom']      = $row['hasSmallDogGroom'];

    //append to array
    array_push($rows, $row_array);
}

//print
echo json_encode($rows);


?>