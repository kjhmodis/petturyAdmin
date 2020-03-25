<?php

require 'PetturyDBConfig.php';

//validate
if (!$mysqli)
{
    echo "error : " . mysqli_connect_error();
    exit();
}

//prepare raw data
$placeNames                 = array("24시 서울YES동물병원",
                                    "하임동물병원",
                                    "한마음종합동물병원",
                                    "순수동물병원",
                                    "세브란스동물병원",
                                    "나라동물병원",
                                    "죽전예담동물병원",
                                    "영동동물병원",
                                    "파우동물병원",
                                    "대학동물병원",
                                    "AP동물병원",
                                    "수지동물병원",
                                    "아이러브퍼피",
                                    "우리동네동물병원",
                                    "24시동물병원",
                                    "현대동물병원",
                                    "주주동물병원",
                                    "제일종합동물병원",
                                    "우사랑동물병원",
                                    "용인24시 메이트동물병원");

$placeTypes                 = array("동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "애견카페",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원",
                                    "동물병원");

$phoneNums                  = array("031-272-1313",
                                    "031-898-4300",
                                    "031-265-7512",
                                    "031-262-8700",
                                    "031-263-7588",
                                    "031-712-0707",
                                    "031-264-7502",
                                    "031-896-3881",
                                    "031-898-0330",
                                    "031-261-8277",
                                    "031-263-0085",
                                    "031-365-3375",
                                    "031-261-0969",
                                    "031-281-0811",
                                    "031-281-7585",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$latitudes                  = array(37.331726,
                                    37.322339,
                                    37.322587,
                                    37.322655,
                                    37.323788,
                                    37.337693,
                                    37.328772,
                                    37.331569,
                                    37.332259,
                                    37.332938,
                                    37.334277,
                                    37.333424,
                                    37.33291,
                                    37.288747,
                                    37.279083,
                                    37.268406,
                                    37.282694,
                                    37.27121,
                                    37.277249,
                                    37.33221);

$longitudes                 = array(127.118428,
                                    127.099792,
                                    127.09425,
                                    127.09333,
                                    127.096485,
                                    127.116446,
                                    127.115287,
                                    127.124304,
                                    127.123467,
                                    127.098443,
                                    127.097472,
                                    127.09727,
                                    127.108593,
                                    127.11116,
                                    127.110999,
                                    127.105625,
                                    127.111495,
                                    127.129122,
                                    127.116498,
                                    127.108546);


$blogURLs                   = array("http://blog.naver.com/vet9879",
                                    "http://blog.naver.com/heimah",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "http://blog.naver.com/yedam7502",
                                    "http://blog.naver.com/vetchoi",
                                    "",
                                    "",
                                    "http://blog.naver.com/ap_amc",
                                    "",
                                    "http://blog.naver.com/lsw003",
                                    "http://taclinic.blog.me/220868611815",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$naverDetailURLs            = array("http://map.naver.com/local/siteview.nhn?code=32731215",
                                    "http://map.naver.com/local/siteview.nhn?code=37842396",
                                    "http://map.naver.com/local/siteview.nhn?code=19170488&_ts=1509962170643",
                                    "http://map.naver.com/local/siteview.nhn?code=35117684",
                                    "http://map.naver.com/local/siteview.nhn?code=33212311",
                                    "http://map.naver.com/local/siteview.nhn?code=20399648",
                                    "http://map.naver.com/local/siteview.nhn?code=37495581",
                                    "http://map.naver.com/local/siteview.nhn?code=31777783",
                                    "http://map.naver.com/local/siteview.nhn?code=37673111",
                                    "http://map.naver.com/local/siteview.nhn?code=11684596",
                                    "http://map.naver.com/local/siteview.nhn?code=33510460",
                                    "http://map.naver.com/local/siteview.nhn?code=34842690",
                                    "https://store.naver.com/restaurants/detail?id=754551030&entry=plt&query=%EC%95%84%EC%9D%B4%EB%9F%AC%EB%B8%8C%ED%8D%BC%ED%94%BC",
                                    "http://map.naver.com/local/siteview.nhn?code=35664641",
                                    "http://map.naver.com/local/siteview.nhn?code=36962337",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$websiteURLs                = array("http://www.seoulyes.co.kr/",
                                    "http://heimah.co.kr/",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "http://www.sujipet.com/main",
                                    "",
                                    "https://kovet.modoo.at/",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$doroAddresses              = array("경기도 용인시 수지구 현암로 81 벤포스타(Ⅰ)",
                                    "경기도 용인시 수지구 포은대로 450",
                                    "경기도 용인시 수지구 풍덕천로 113",
                                    "경기도 용인시 수지구 수지로296번길 30",
                                    "경기도 용인시 수지구 풍덕천로 135",
                                    "경기도 성남시 분당구 미금로 48 오성프라자",
                                    "경기도 용인시 수지구 대지로 58 선진포리스트",
                                    "경기도 용인시 수지구 현암로 136 세종프라자",
                                    "경기도 용인시 수지구 현암로125번길 6 그린프라자",
                                    "경기도 용인시 수지구 문인로39번길 3-1",
                                    "경기도 용인시 수지구 수지로 421 태평빌딩",
                                    "경기도 용인시 수지구 수지로 77 힐프라자 101호",
                                    "경기 용인시 수지구 용구대로 2769",
                                    "경기도 용인시 기흥구 새천년로16번길 3-2 월드프라자",
                                    "경기도 용인시 기흥구 구갈로 53 한양골프",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$bunjiAddresses             = array("경기도 용인시 수지구 죽전동 1174-1",
                                    "경기도 용인시 수지구 풍덕천동 100-17",
                                    "경기도 용인시 수지구 풍덕천동 1075-4",
                                    "경기도 용인시 수지구 풍덕천동 697-3",
                                    "경기도 용인시 수지구 풍덕천1동 713-6",
                                    "경기도 성남시 분당구 구미동 205-1 오성프라자 113호",
                                    "경기도 용인시 수지구 죽전동 1254-3",
                                    "경기도 용인시 수지구 죽전동 1191-1 세종프라자 101호",
                                    "경기도 용인시 수지구 죽전동 1178-1",
                                    "경기도 용인시 수지구 풍덕천동 666-1",
                                    "경기도 용인시 수지구 동천동 886-1 태평빌딩 1층",
                                    "경기도 용인시 수지구 상현동 106-8 힐프라자 101호",
                                    "경기도 용인시 수지구 죽전동 876-6 코디클럽",
                                    "경기도 용인시 기흥구 신갈동 722 월드프라자 1층 101호",
                                    "경기도 용인시 기흥구 구갈동 391-5",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$holidayTimes               = array("09:00~22:00",
                                    "10:00~18:00",
                                    "10:00~18:00",
                                    "",
                                    "",
                                    "10:00~19:00",
                                    "13:00~22:00",
                                    "12:00~20:30",
                                    "",
                                    "09:30~18:00",
                                    "10:00~20:00",
                                    "",
                                    "12:30~22:00",
                                    "13:00~18:00(호텔,용품)",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$sundayTimes                = array("09:00~22:00",
                                    "10:00~18:00",
                                    "10:00~18:00",
                                    "",
                                    "",
                                    "",
                                    "예약진료",
                                    "12:00~20:30",
                                    "",
                                    "",
                                    "10:00~19:00",
                                    "",
                                    "12:30~22:00",
                                    "13:00~18:00(호텔,용품)",
                                    "10:00~19:00",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$saturdayTimes              = array("09:00~22:00",
                                    "10:00~20:00",
                                    "10:00~18:00",
                                    "09:30~20:00",
                                    "09:00~18:00",
                                    "10:00~19:00",
                                    "09:00~22:00",
                                    "09:30~20:30",
                                    "",
                                    "09:30~18:00",
                                    "10:00~20:00",
                                    "",
                                    "12:30~22:00",
                                    "10:00-16:30(진료) / 10:00~17:00(호텔,용품)",
                                    "09:00~21:00",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$weekdayTimes               = array("09:00~22:00",
                                    "10:00~22:00",
                                    "09:30~20:30",
                                    "09:30~20:00",
                                    "09:00~19:00",
                                    "10:00~20:00",
                                    "09:00~22:00",
                                    "09:30~20:30",
                                    "10:00~20:00",
                                    "09:30~20:00",
                                    "09:30~20:00",
                                    "10:00~20:00",
                                    "12:30~22:00",
                                    "09:30-19:30(진료) / 09:00~20:00(호텔,용품)",
                                    "09:00~22:00",
                                    "",
                                    "",
                                    "",
                                    "",
                                    "");

$open24HRs                  = array(false, true, false, false, true,
                                    true, false, true, false, true,
                                    true, false, false, false, true,
                                    true, false, true, true, false);

$hasSwimPools               = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasIndoorEntrances         = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasOutdoorEntrances        = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasAdoptions               = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasTrainings               = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasKindergartens           = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasFunerals                = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasGoods                   = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasDiets                   = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);


$hasCatHotels               = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasBigDogHotels            = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasSmallDogHotels          = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);


$hasSelfGrooms              = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasCatAnesGrooms           = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasCatGrooms               = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasBigDogGrooms            = array(true, false, false, true, false,
                                    true, false, false, false, true,
                                    false, true, false, false, true,
                                    false, false, true, false, false);

$hasSmallDogGrooms          = array(true, false, true, false, true,
                                    false, true, false, false, true,
                                    true, false, false, true, false,
                                    false, true, false, true, false);


//iterate
$i                          = 0;
while ($i < 20)
{
    //prepare arguments
    $placeName              = $placeNames[$i];
    $placeType              = $placeTypes[$i];
    $phoneNum               = $phoneNums[$i];
    $latitude               = $latitudes[$i];
    $longitude              = $longitudes[$i];

    $blogURL                = $blogURLs[$i];
    $naverDetailURL         = $naverDetailURLs[$i];
    $websiteURL             = $websiteURLs[$i];
    $doroAddress            = $doroAddresses[$i];
    $bunjiAddress           = $bunjiAddresses[$i];
    $holidayTime            = $holidayTimes[$i];
    $sundayTime             = $sundayTimes[$i];
    $saturdayTime           = $saturdayTimes[$i];
    $weekdayTime            = $weekdayTimes[$i];

    $open24HR               = $open24HRs[$i];

    $hasSwimPool            = $hasSwimPools[$i];
    $hasIndoorEntrance      = $hasIndoorEntrances[$i];
    $hasOutdoorEntrance     = $hasOutdoorEntrances[$i];
    $hasAdoption            = $hasAdoptions[$i];
    $hasTraining            = $hasTrainings[$i];
    $hasKindergarten        = $hasKindergartens[$i];
    $hasFuneral             = $hasFunerals[$i];
    $hasGoods               = $hasGoods[$i];
    $hasDiet                = $hasDiets[$i];

    $hasCatHotel            = $hasCatHotels[$i];
    $hasBigDogHotel         = $hasBigDogHotels[$i];
    $hasSmallDogHotel       = $hasSmallDogHotels[$i];

    $hasSelfGroom           = $hasSelfGrooms[$i];
    $hasCatAnesGroom        = $hasCatAnesGrooms[$i];
    $hasCatGroom            = $hasCatGrooms[$i];
    $hasBigDogGroom         = $hasBigDogGrooms[$i];
    $hasSmallDogGroom       = $hasSmallDogGrooms[$i];

    //prepare query
    $stmt       = "INSERT INTO places (placeName, placeType, phoneNum, latitude, longitude, blogURL, naverDetailURL, 
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
    mysqli_query($mysqli, $stmt);

    //increase
    $i++;
}


?>