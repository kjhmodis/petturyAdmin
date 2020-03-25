<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pettury Admin</title>
</head>
<body>

<!-- JS Sources -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Modal -->
<!-- Create Modal -->
<div class="modal fade" id="createPlace" tabindex="-1" role="dialog" aria-labelledby="createPlaceTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">
                    <p class="text-primary">병원 등록</p>
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_placeName">이름</label>
                                <input class="form-control" type="text" id="input_placeName">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_placeType">종류</label>
                                <select class="form-control" id="input_placeType">
                                    <option>동물 병원</option>
                                    <option>애견 카페</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_phoneNum">연락처</label>
                                <input class="form-control" type="text" id="input_phoneNum">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_latitude">위도</label>
                                <input class="form-control" type="text" id="input_latitude">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_longitude">경도</label>
                                <input class="form-control" type="text" id="input_longitude">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_websiteURL">사이트 URL</label>
                                <input class="form-control" type="text" id="input_websiteURL">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_blogURL">블로그 URL</label>
                                <input class="form-control" type="text" id="input_blogURL">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_naverDetailURL">네이버 상세 URL</label>
                                <input class="form-control" type="text" id="input_naverDetailURL">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_doroAddress">도로명 주소</label>
                                <input class="form-control" type="text" id="input_doroAddress">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_bunjiAddress">번지 주소</label>
                                <input class="form-control" type="text" id="input_bunjiAddress">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_holidayTime">공휴일 시간</label>
                                <input class="form-control" type="text" id="input_holidayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_sundayTime">일요일 시간</label>
                                <input class="form-control" type="text" id="input_sundayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_saturdayTime">토요일 시간</label>
                                <input class="form-control" type="text" id="input_saturdayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_weekdayTime">평일 시간</label>
                                <input class="form-control" type="text" id="input_weekdayTime">
                            </div>
                        </div>
                        <p class="text-info text-left">서비스 항목</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_open24HR">24시간</label>
                                <input type="checkbox" id="input_open24HR">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSwimPool">수영장</label>
                                <input type="checkbox" id="input_hasSwimPool">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasIndoorEntrance">내부 출구</label>
                                <input type="checkbox" id="input_hasIndoorEntrance">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasOutdoorEntrance">외부 출구</label>
                                <input type="checkbox" id="input_hasOutdoorEntrance">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasAdoption">입양 가능</label>
                                <input type="checkbox" id="input_hasAdoption">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasTraining">훈련 과정</label>
                                <input type="checkbox" id="input_hasTraining">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasKindergarten">유치원</label>
                                <input type="checkbox" id="input_hasKindergarten">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasFuneral">장례식</label>
                                <input type="checkbox" id="input_hasFuneral">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasGoods">용품 판매</label>
                                <input type="checkbox" id="input_hasGoods">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasDiet">사료 판매</label>
                                <input type="checkbox" id="input_hasDiet">
                            </div>
                            <div class="form-group col-md-6"></div>
                        </div>
                        <p class="text-info text-left">호텔</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasCatHotel">냥이 호텔</label>
                                <input type="checkbox" id="input_hasCatHotel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasBigDogHotel">대형견 호텔</label>
                                <input type="checkbox" id="input_hasBigDogHotel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSmallDogHotel">소형견 호텔</label>
                                <input type="checkbox" id="input_hasSmallDogHotel">
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <p class="text-info text-left">미용</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasSelfGroom">자가(셀프)</label>
                                <input type="checkbox" id="input_hasSelfGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasCatAnesGroom">냥이(마취)</label>
                                <input type="checkbox" id="input_hasCatAnesGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasCatGroom">냥이(무마취)</label>
                                <input type="checkbox" id="input_hasCatGroom">
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasBigDogGroom">대형견</label>
                                <input type="checkbox" id="input_hasBigDogGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSmallDogGroom">소형견</label>
                                <input type="checkbox" id="input_hasSmallDogGroom">
                            </div>
                            <div class="form-group col-md-6"></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary" onclick="createPlace()" data-dismiss="modal">등록</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="updatePlace" tabindex="-1" role="dialog" aria-labelledby="updatePlaceTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">
                    <p class="text-primary">병원 수정</p>
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="sr-only" id="input_UID"></label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_placeName">이름</label>
                                <input class="form-control" type="text" id="input_placeName">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_placeType">종류</label>
                                <select class="form-control" id="input_placeType">
                                    <option>동물 병원</option>
                                    <option>애견 카페</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_phoneNum">연락처</label>
                                <input class="form-control" type="text" id="input_phoneNum">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_latitude">위도</label>
                                <input class="form-control" type="text" id="input_latitude">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_longitude">경도</label>
                                <input class="form-control" type="text" id="input_longitude">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_websiteURL">사이트 URL</label>
                                <input class="form-control" type="text" id="input_websiteURL">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_blogURL">블로그 URL</label>
                                <input class="form-control" type="text" id="input_blogURL">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="text-info" for="input_naverDetailURL">네이버 상세 URL</label>
                                <input class="form-control" type="text" id="input_naverDetailURL">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_doroAddress">도로명 주소</label>
                                <input class="form-control" type="text" id="input_doroAddress">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-info" for="input_bunjiAddress">번지 주소</label>
                                <input class="form-control" type="text" id="input_bunjiAddress">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_holidayTime">공휴일 시간</label>
                                <input class="form-control" type="text" id="input_holidayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_sundayTime">일요일 시간</label>
                                <input class="form-control" type="text" id="input_sundayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_saturdayTime">토요일 시간</label>
                                <input class="form-control" type="text" id="input_saturdayTime">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="text-info" for="input_weekdayTime">평일 시간</label>
                                <input class="form-control" type="text" id="input_weekdayTime">
                            </div>
                        </div>
                        <p class="text-info text-left">서비스 항목</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_open24HR">24시간</label>
                                <input type="checkbox" id="input_open24HR">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSwimPool">수영장</label>
                                <input type="checkbox" id="input_hasSwimPool">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasIndoorEntrance">내부 출구</label>
                                <input type="checkbox" id="input_hasIndoorEntrance">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasOutdoorEntrance">외부 출구</label>
                                <input type="checkbox" id="input_hasOutdoorEntrance">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasAdoption">입양 가능</label>
                                <input type="checkbox" id="input_hasAdoption">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasTraining">훈련 과정</label>
                                <input type="checkbox" id="input_hasTraining">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasKindergarten">유치원</label>
                                <input type="checkbox" id="input_hasKindergarten">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasFuneral">장례식</label>
                                <input type="checkbox" id="input_hasFuneral">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasGoods">용품 판매</label>
                                <input type="checkbox" id="input_hasGoods">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasDiet">사료 판매</label>
                                <input type="checkbox" id="input_hasDiet">
                            </div>
                            <div class="form-group col-md-6"></div>
                        </div>
                        <p class="text-info text-left">호텔</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasCatHotel">냥이 호텔</label>
                                <input type="checkbox" id="input_hasCatHotel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasBigDogHotel">대형견 호텔</label>
                                <input type="checkbox" id="input_hasBigDogHotel">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSmallDogHotel">소형견 호텔</label>
                                <input type="checkbox" id="input_hasSmallDogHotel">
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <p class="text-info text-left">미용</p>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasSelfGroom">자가(셀프)</label>
                                <input type="checkbox" id="input_hasSelfGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasCatAnesGroom">냥이(마취)</label>
                                <input type="checkbox" id="input_hasCatAnesGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasCatGroom">냥이(무마취)</label>
                                <input type="checkbox" id="input_hasCatGroom">
                            </div>
                            <div class="form-group col-md-3"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="input_hasBigDogGroom">대형견</label>
                                <input type="checkbox" id="input_hasBigDogGroom">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="input_hasSmallDogGroom">소형견</label>
                                <input type="checkbox" id="input_hasSmallDogGroom">
                            </div>
                            <div class="form-group col-md-6"></div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary" onclick="updatePlace()" data-dismiss="modal">수정</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletePlace" tabindex="-1" role="dialog" aria-labelledby="deletePlaceTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title">
                    <p class="text-primary">병원 삭제</p>
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="sr-only" id="input_UID"></label>
                        <p class="text-info text-center">정말 삭제하시겠습니까?</p>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
                <button type="button" class="btn btn-primary" onclick="deletePlace()" data-dismiss="modal">삭제</button>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
<table class="table table-striped text-nowrap text-center">
    <thead class="thead-dark">
    <tr>
        <th>
            <button data-toggle='modal' class='btn btn-primary btn-lg createPlace'> 등록 </button>
        </th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <th class="text-warning"> 편집 </th>
        <th> 이름 </th>
        <th> 종류 </th>
        <th> 연락처 </th>
        <th> 위도 </th>
        <th> 경도 </th>
        <th> 블로그 URL </th>
        <th> 네이버 상세 URL </th>
        <th> 사이트 URL </th>
        <th> 도로명 주소 </th>
        <th> 번지 주소 </th>
        <th> 휴일 영업시간 </th>
        <th> 일요일 영업시간 </th>
        <th> 토요일 영업시간 </th>
        <th> 평일 영업시간 </th>
        <th> 24시간 영업 </th>
        <th> 수영장 </th>
        <th> 내부 출입구 </th>
        <th> 외부 출입구 </th>
        <th> 입양 </th>
        <th> 훈련 </th>
        <th> 유치원 </th>
        <th> 장례식 </th>
        <th> 용품 판매 </th>
        <th> 사료 판매 </th>
        <th> 고양이 호텔 </th>
        <th> 대형견 호텔 </th>
        <th> 소형견 호텔 </th>
        <th> 자가 미용 </th>
        <th> 고양이 마취 미용 </th>
        <th> 고양이 미용 </th>
        <th> 대형견 미용 </th>
        <th> 소형견 미용 </th>
        <th> UID </th>
    </tr>
    </thead>
    <tbody>

    <!-- LOGIC -->
    <?php

    //refer DB settings
    require 'PetturyDBConfig.php';

    function checkFilter($a)
    {
        if ($a == 0)
        {
            return "N";
        }
        else
        {
            return "Y";
        }
    }

    //validate connection
    if (!$mysqli)
    {
        echo "error : " . mysqli_connect_error();
        exit();
    }

    //connection
    // $con = mysqli_connect('localhost', 'root', 'next0205', 'pettury');

    // if (!$con)
    // {
    //     echo "error : " . mysqli_connect_error();
    //     exit();
    // }

    //prepare query
    $sql 	= 'SELECT * FROM places';
    $query 	= mysqli_query($mysqli, $sql);

    //execute query
    while ($row = mysqli_fetch_array($query))
    {
        echo "<tr>".
                "<td class='actionMenu'>
                    <button data-toggle='modal' class='btn btn-warning btn-sm updatePlace'> 편집 </button>
                    <button data-toggle='modal' class='btn btn-danger  btn-sm deletePlace'> 삭제 </button>
                 </td>".
                "<td class='placeName'>"                            . $row['placeName']                         . "</td>".
                "<td class='placeType'>"                            . $row['placeType']                         . "</td>".
                "<td class='phoneNum'>"                             . $row['phoneNum']                          . "</td>".
                "<td class='latitude'>"                             . $row['latitude']                          . "</td>".
                "<td class='longitude'>"                            . $row['longitude']                         . "</td>".
                "<td class='blogURL'>"                              . $row['blogURL']                           . "</td>".
                "<td class='naverDetailURL'>"                       . $row['naverDetailURL']                    . "</td>".
                "<td class='websiteURL'>"                           . $row['websiteURL']                        . "</td>".
                "<td class='doroAddress'>"                          . $row['doroAddress']                       . "</td>".
                "<td class='bunjiAddress'>"                         . $row['bunjiAddress']                      . "</td>".
                "<td class='holidayTime'>"                          . $row['holidayTime']                       . "</td>".
                "<td class='sundayTime'>"                           . $row['sundayTime']                        . "</td>".
                "<td class='saturdayTime'>"                         . $row['saturdayTime']                      . "</td>".
                "<td class='weekdayTime'>"                          . $row['weekdayTime']                       . "</td>".
                "<td class='open24HR font-weight-bold'>"            . checkFilter($row['open24HR'])             . "</td>".
                "<td class='hasSwimPool font-weight-bold'>"         . checkFilter($row['hasSwimPool'])          . "</td>".
                "<td class='hasIndoorEntrance font-weight-bold'>"   . checkFilter($row['hasIndoorEntrance'])    . "</td>".
                "<td class='hasOutdoorEntrance font-weight-bold'>"  . checkFilter($row['hasOutdoorEntrance'])   . "</td>".
                "<td class='hasAdoption font-weight-bold'>"         . checkFilter($row['hasAdoption'])          . "</td>".
                "<td class='hasTraining font-weight-bold'>"         . checkFilter($row['hasTraining'])          . "</td>".
                "<td class='hasKindergarten font-weight-bold'>"     . checkFilter($row['hasKindergarten'])      . "</td>".
                "<td class='hasFuneral font-weight-bold'>"          . checkFilter($row['hasFuneral'])           . "</td>".
                "<td class='hasGoods font-weight-bold'>"            . checkFilter($row['hasGoods'])             . "</td>".
                "<td class='hasDiet font-weight-bold'>"             . checkFilter($row['hasDiet'])              . "</td>".
                "<td class='hasCatHotel font-weight-bold'>"         . checkFilter($row['hasCatHotel'])          . "</td>".
                "<td class='hasBigDogHotel font-weight-bold'>"      . checkFilter($row['hasBigDogHotel'])       . "</td>".
                "<td class='hasSmallDogHotel font-weight-bold'>"    . checkFilter($row['hasSmallDogHotel'])     . "</td>".
                "<td class='hasSelfGroom font-weight-bold'>"        . checkFilter($row['hasSelfGroom'])         . "</td>".
                "<td class='hasCatAnesGroom font-weight-bold'>"     . checkFilter($row['hasCatAnesGroom'])      . "</td>".
                "<td class='hasCatGroom font-weight-bold'>"         . checkFilter($row['hasCatGroom'])          . "</td>".
                "<td class='hasBigDogGroom font-weight-bold'>"      . checkFilter($row['hasBigDogGroom'])       . "</td>".
                "<td class='hasSmallDogGroom font-weight-bold'>"    . checkFilter($row['hasSmallDogGroom'])     . "</td>".
                "<td class='UID'>"                                  . $row['UID']                               . "</td>".
              "</tr>";
    }

    //close connection
    mysqli_close($mysqli);

    ?>

    </tbody>
</table>
</div>


<script type="text/javascript">

    function convertUTCDateToLocalDate(date)
    {
        return new Date(Date.UTC(date.getFullYear(), date.getMonth(), date.getDate(),  date.getHours(), date.getMinutes(), date.getSeconds()));
    }

    function boolIntValue(checked)
    {
        return checked == true ? 1 : 0;
    }

    function textBoolValue(checked)
    {
        return checked == 'Y' ? true : false;
    }

    $(".createPlace").click(function()
    {
        console.log("create clicked");

        var $modal = $('#createPlace');

        /* reset data */

        //placeName
        $('input[id = input_placeName]').val("");

        //placeType
        $('select[id = input_placeType] option').each(function()
        {
            $(this).prop('selected', false);
        });

        //phoneNum
        $('input[id = input_phoneNum]').val("");

        //latitude
        $('input[id = input_latitude]').val("");

        //longitude
        $('input[id = input_longitude]').val("");

        //blogURL
        $('input[id = input_blogURL]').val("");

        //naverDetailURL
        $('input[id = input_naverDetailURL]').val("");

        //websiteURL
        $('input[id = input_websiteURL]').val("");

        //doroAddress
        $('input[id = input_doroAddress]').val("");

        //bunjiAddress
        $('input[id = input_bunjiAddress]').val("");

        //holidayTime
        $('input[id = input_holidayTime]').val("");

        //sundayTime
        $('input[id = input_sundayTime]').val("");

        //saturdayTime
        $('input[id = input_saturdayTime]').val("");

        //weekdayTime
        $('input[id = input_weekdayTime]').val("");

        //open24HR
        $('input[id = input_open24HR]').prop('checked', false);

        //hasSwimPool
        $('input[id = input_hasSwimPool]').prop('checked', false);

        //hasIndoorEntrance
        $('input[id = input_hasIndoorEntrance]').prop('checked', false);

        //hasOutdoorEntrance
        $('input[id = input_hasOutdoorEntrance]').prop('checked', false);

        //hasAdoption
        $('input[id = input_hasAdoption]').prop('checked', false);

        //hasTraining
        $('input[id = input_hasTraining]').prop('checked', false);

        //hasKindergarten
        $('input[id = input_hasKindergarten]').prop('checked', false);

        //hasFuneral
        $('input[id = input_hasFuneral]').prop('checked', false);

        //hasGoods
        $('input[id = input_hasGoods]').prop('checked', false);

        //hasDiet
        $('input[id = input_hasDiet]').prop('checked', false);

        //hasCatHotel
        $('input[id = input_hasCatHotel]').prop('checked', false);

        //hasBigDogHotel
        $('input[id = input_hasBigDogHotel]').prop('checked', false);

        //hasSmallDogHotel
        $('input[id = input_hasSmallDogHotel]').prop('checked', false);

        //hasSelfGroom
        $('input[id = input_hasSelfGroom]').prop('checked', false);

        //hasCatAnesGroom
        $('input[id = input_hasCatAnesGroom]').prop('checked', false);

        //hasCatGroom
        $('input[id = input_hasCatGroom]').prop('checked', false);

        //hasBigDogGroom
        $('input[id = input_hasBigDogGroom]').prop('checked', false);

        //hasSmallDogGroom
        $('input[id = input_hasSmallDogGroom]').prop('checked', false);

        //show modal
        $modal.modal('show');

    });

    function createPlace()
    {
        //prepare arguments
        var placeName           = $("#createPlace").find("input[id='input_placeName']").val();
        var placeType           = $("#createPlace").find("select[id='input_placeType']").val();
        var phoneNum            = $("#createPlace").find("input[id='input_phoneNum']").val();
        var latitude            = $("#createPlace").find("input[id='input_latitude']").val();
        var longitude           = $("#createPlace").find("input[id='input_longitude']").val();

        var blogURL             = $("#createPlace").find("input[id='input_blogURL']").val();
        var naverDetailURL      = $("#createPlace").find("input[id='input_naverDetailURL']").val();
        var websiteURL          = $("#createPlace").find("input[id='input_websiteURL']").val();
        var doroAddress         = $("#createPlace").find("input[id='input_doroAddress']").val();
        var bunjiAddress        = $("#createPlace").find("input[id='input_bunjiAddress']").val();

        var holidayTime         = $("#createPlace").find("input[id='input_holidayTime']").val();
        var sundayTime          = $("#createPlace").find("input[id='input_sundayTime']").val();
        var saturdayTime        = $("#createPlace").find("input[id='input_saturdayTime']").val();
        var weekdayTime         = $("#createPlace").find("input[id='input_weekdayTime']").val();

        var open24HR            = boolIntValue($("#createPlace").find("input[id='input_open24HR']").prop("checked"));

        var hasSwimPool         = boolIntValue($("#createPlace").find("input[id='input_hasSwimPool']").prop("checked"));
        var hasIndoorEntrance   = boolIntValue($("#createPlace").find("input[id='input_hasIndoorEntrance']").prop("checked"));
        var hasOutdoorEntrance  = boolIntValue($("#createPlace").find("input[id='input_hasOutdoorEntrance']").prop("checked"));
        var hasAdoption         = boolIntValue($("#createPlace").find("input[id='input_hasAdoption']").prop("checked"));
        var hasTraining         = boolIntValue($("#createPlace").find("input[id='input_hasTraining']").prop("checked"));
        var hasKindergarten     = boolIntValue($("#createPlace").find("input[id='input_hasKindergarten']").prop("checked"));
        var hasFuneral          = boolIntValue($("#createPlace").find("input[id='input_hasFuneral']").prop("checked"));
        var hasGoods            = boolIntValue($("#createPlace").find("input[id='input_hasGoods']").prop("checked"));
        var hasDiet             = boolIntValue($("#createPlace").find("input[id='input_hasDiet']").prop("checked"));

        var hasCatHotel         = boolIntValue($("#createPlace").find("input[id='input_hasCatHotel']").prop("checked"));
        var hasBigDogHotel      = boolIntValue($("#createPlace").find("input[id='input_hasBigDogHotel']").prop("checked"));
        var hasSmallDogHotel    = boolIntValue($("#createPlace").find("input[id='input_hasSmallDogHotel']").prop("checked"));

        var hasSelfGroom        = boolIntValue($("#createPlace").find("input[id='input_hasSelfGroom']").prop("checked"));
        var hasCatAnesGroom     = boolIntValue($("#createPlace").find("input[id='input_hasCatAnesGroom']").prop("checked"));
        var hasCatGroom         = boolIntValue($("#createPlace").find("input[id='input_hasCatGroom']").prop("checked"));
        var hasBigDogGroom      = boolIntValue($("#createPlace").find("input[id='input_hasBigDogGroom']").prop("checked"));
        var hasSmallDogGroom    = boolIntValue($("#createPlace").find("input[id='input_hasSmallDogGroom']").prop("checked"));

        //AJAX
        $.ajax({
            type     : "POST",
            url      : "placeCreate.php",
            data     :
                        {
                            placeName           : placeName,
                            placeType           : placeType,
                            phoneNum            : phoneNum,
                            latitude            : latitude,
                            longitude           : longitude,
                            blogURL             : blogURL,
                            naverDetailURL      : naverDetailURL,
                            websiteURL          : websiteURL,
                            doroAddress         : doroAddress,
                            bunjiAddress        : bunjiAddress,
                            holidayTime         : holidayTime,
                            sundayTime          : sundayTime,
                            saturdayTime        : saturdayTime,
                            weekdayTime         : weekdayTime,
                            open24HR            : open24HR,
                            hasSwimPool         : hasSwimPool,
                            hasIndoorEntrance   : hasIndoorEntrance,
                            hasOutdoorEntrance  : hasOutdoorEntrance,
                            hasAdoption         : hasAdoption,
                            hasTraining         : hasTraining,
                            hasKindergarten     : hasKindergarten,
                            hasFuneral          : hasFuneral,
                            hasGoods            : hasGoods,
                            hasDiet             : hasDiet,
                            hasCatHotel         : hasCatHotel,
                            hasBigDogHotel      : hasBigDogHotel,
                            hasSmallDogHotel    : hasSmallDogHotel,
                            hasSelfGroom        : hasSelfGroom,
                            hasCatAnesGroom     : hasCatAnesGroom,
                            hasCatGroom         : hasCatGroom,
                            hasBigDogGroom      : hasBigDogGroom,
                            hasSmallDogGroom    : hasSmallDogGroom
                        },
            dataType : "JSON",
            success  : function(data)
            {
                console.log(data);
                location.reload();
            },
            error : function(xhr, option, error)
            {
                console.log(xhr.responseText);
                console.log(xhr.status);
                alert("code : "+xhr.status+"\n"+"message : "+xhr.responseText+"\n"+"error : "+error);
            }
        });

    }

    $(".updatePlace").click(function()
    {
        var $row                = $(this).closest("tr");
        var $modal              = $('#updatePlace');

        /* prepare data */

        var placeName           = $row.find(".placeName").text();
        var placeType           = $row.find(".placeType").text();
        var phoneNum            = $row.find(".phoneNum").text();
        var latitude            = $row.find(".latitude").text();
        var longitude           = $row.find(".longitude").text();

        var blogURL             = $row.find(".blogURL").text();
        var naverDetailURL      = $row.find(".naverDetailURL").text();
        var websiteURL          = $row.find(".websiteURL").text();
        var doroAddress         = $row.find(".doroAddress").text();
        var bunjiAddress        = $row.find(".bunjiAddress").text();

        var holidayTime         = $row.find(".holidayTime").text();
        var sundayTime          = $row.find(".sundayTime").text();
        var saturdayTime        = $row.find(".saturdayTime").text();
        var weekdayTime         = $row.find(".weekdayTime").text();

        var open24HR            = $row.find(".open24HR").text();

        var hasSwimPool         = $row.find(".hasSwimPool").text();
        var hasIndoorEntrance   = $row.find(".hasIndoorEntrance").text();
        var hasOutdoorEntrance  = $row.find(".hasOutdoorEntrance").text();
        var hasAdoption         = $row.find(".hasAdoption").text();
        var hasTraining         = $row.find(".hasTraining").text();
        var hasKindergarten     = $row.find(".hasKindergarten").text();
        var hasFuneral          = $row.find(".hasFuneral").text();
        var hasGoods            = $row.find(".hasGoods").text();
        var hasDiet             = $row.find(".hasDiet").text();

        var hasCatHotel         = $row.find(".hasCatHotel").text();
        var hasBigDogHotel      = $row.find(".hasBigDogHotel").text();
        var hasSmallDogHotel    = $row.find(".hasSmallDogHotel").text();

        var hasSelfGroom        = $row.find(".hasSelfGroom").text();
        var hasCatAnesGroom     = $row.find(".hasCatAnesGroom").text();
        var hasCatGroom         = $row.find(".hasCatGroom").text();
        var hasBigDogGroom      = $row.find(".hasBigDogGroom").text();
        var hasSmallDogGroom    = $row.find(".hasSmallDogGroom").text();

        var UID                 = $row.find(".UID").text();

        /* bind data */

        //placeName
        $('input[id = input_placeName]').val(placeName);

        //placeType
        $('select[id = input_placeType] option').each(function()
        {
            this.value == placeType ? $(this).prop('selected', true) : $(this).prop('selected', false);
        });

        //phoneNum
        $('input[id = input_phoneNum]').val(phoneNum);

        //latitude
        $('input[id = input_latitude]').val(latitude);

        //longitude
        $('input[id = input_longitude]').val(longitude);

        //blogURL
        $('input[id = input_blogURL]').val(blogURL);

        //naverDetailURL
        $('input[id = input_naverDetailURL]').val(naverDetailURL);

        //websiteURL
        $('input[id = input_websiteURL]').val(websiteURL);

        //doroAddress
        $('input[id = input_doroAddress]').val(doroAddress);

        //bunjiAddress
        $('input[id = input_bunjiAddress]').val(bunjiAddress);

        //holidayTime
        $('input[id = input_holidayTime]').val(holidayTime);

        //sundayTime
        $('input[id = input_sundayTime]').val(sundayTime);

        //saturdayTime
        $('input[id = input_saturdayTime]').val(saturdayTime);

        //weekdayTime
        $('input[id = input_weekdayTime]').val(weekdayTime);

        //open24HR
        $('input[id = input_open24HR]').prop('checked', textBoolValue(open24HR));

        //hasSwimPool
        $('input[id = input_hasSwimPool]').prop('checked', textBoolValue(hasSwimPool));

        //hasIndoorEntrance
        $('input[id = input_hasIndoorEntrance]').prop('checked', textBoolValue(hasIndoorEntrance));

        //hasOutdoorEntrance
        $('input[id = input_hasOutdoorEntrance]').prop('checked', textBoolValue(hasOutdoorEntrance));

        //hasAdoption
        $('input[id = input_hasAdoption]').prop('checked', textBoolValue(hasAdoption));

        //hasTraining
        $('input[id = input_hasTraining]').prop('checked', textBoolValue(hasTraining));

        //hasKindergarten
        $('input[id = input_hasKindergarten]').prop('checked', textBoolValue(hasKindergarten));

        //hasFuneral
        $('input[id = input_hasFuneral]').prop('checked', textBoolValue(hasFuneral));

        //hasGoods
        $('input[id = input_hasGoods]').prop('checked', textBoolValue(hasGoods));

        //hasDiet
        $('input[id = input_hasDiet]').prop('checked', textBoolValue(hasDiet));

        //hasCatHotel
        $('input[id = input_hasCatHotel]').prop('checked', textBoolValue(hasCatHotel));

        //hasBigDogHotel
        $('input[id = input_hasBigDogHotel]').prop('checked', textBoolValue(hasBigDogHotel));

        //hasSmallDogHotel
        $('input[id = input_hasSmallDogHotel]').prop('checked', textBoolValue(hasSmallDogHotel));

        //hasSelfGroom
        $('input[id = input_hasSelfGroom]').prop('checked', textBoolValue(hasSelfGroom));

        //hasCatAnesGroom
        $('input[id = input_hasCatAnesGroom]').prop('checked', textBoolValue(hasCatAnesGroom));

        //hasCatGroom
        $('input[id = input_hasCatGroom]').prop('checked', textBoolValue(hasCatGroom));

        //hasBigDogGroom
        $('input[id = input_hasBigDogGroom]').prop('checked', textBoolValue(hasBigDogGroom));

        //hasSmallDogGroom
        $('input[id = input_hasSmallDogGroom]').prop('checked', textBoolValue(hasSmallDogGroom));

        //UID
        $('label[id = input_UID]').val(UID);

        //show modal
        $modal.modal('show');

    });

    $('#updatePlace').on('show.bs.modal', function (event)
    {


    })


    function updatePlace()
    {
        //prepare arguments
        var placeName           = $("#updatePlace").find("input[id='input_placeName']").val();
        var placeType           = $("#updatePlace").find("select[id='input_placeType']").val();
        var phoneNum            = $("#updatePlace").find("input[id='input_phoneNum']").val();
        var latitude            = $("#updatePlace").find("input[id='input_latitude']").val();
        var longitude           = $("#updatePlace").find("input[id='input_longitude']").val();

        var blogURL             = $("#updatePlace").find("input[id='input_blogURL']").val();
        var naverDetailURL      = $("#updatePlace").find("input[id='input_naverDetailURL']").val();
        var websiteURL          = $("#updatePlace").find("input[id='input_websiteURL']").val();
        var doroAddress         = $("#updatePlace").find("input[id='input_doroAddress']").val();
        var bunjiAddress        = $("#updatePlace").find("input[id='input_bunjiAddress']").val();

        var holidayTime         = $("#updatePlace").find("input[id='input_holidayTime']").val();
        var sundayTime          = $("#updatePlace").find("input[id='input_sundayTime']").val();
        var saturdayTime        = $("#updatePlace").find("input[id='input_saturdayTime']").val();
        var weekdayTime         = $("#updatePlace").find("input[id='input_weekdayTime']").val();

        var open24HR            = boolIntValue($("#updatePlace").find("input[id='input_open24HR']").prop("checked"));

        var hasSwimPool         = boolIntValue($("#updatePlace").find("input[id='input_hasSwimPool']").prop("checked"));
        var hasIndoorEntrance   = boolIntValue($("#updatePlace").find("input[id='input_hasIndoorEntrance']").prop("checked"));
        var hasOutdoorEntrance  = boolIntValue($("#updatePlace").find("input[id='input_hasOutdoorEntrance']").prop("checked"));
        var hasAdoption         = boolIntValue($("#updatePlace").find("input[id='input_hasAdoption']").prop("checked"));
        var hasTraining         = boolIntValue($("#updatePlace").find("input[id='input_hasTraining']").prop("checked"));
        var hasKindergarten     = boolIntValue($("#updatePlace").find("input[id='input_hasKindergarten']").prop("checked"));
        var hasFuneral          = boolIntValue($("#updatePlace").find("input[id='input_hasFuneral']").prop("checked"));
        var hasGoods            = boolIntValue($("#updatePlace").find("input[id='input_hasGoods']").prop("checked"));
        var hasDiet             = boolIntValue($("#updatePlace").find("input[id='input_hasDiet']").prop("checked"));

        var hasCatHotel         = boolIntValue($("#updatePlace").find("input[id='input_hasCatHotel']").prop("checked"));
        var hasBigDogHotel      = boolIntValue($("#updatePlace").find("input[id='input_hasBigDogHotel']").prop("checked"));
        var hasSmallDogHotel    = boolIntValue($("#updatePlace").find("input[id='input_hasSmallDogHotel']").prop("checked"));

        var hasSelfGroom        = boolIntValue($("#updatePlace").find("input[id='input_hasSelfGroom']").prop("checked"));
        var hasCatAnesGroom     = boolIntValue($("#updatePlace").find("input[id='input_hasCatAnesGroom']").prop("checked"));
        var hasCatGroom         = boolIntValue($("#updatePlace").find("input[id='input_hasCatGroom']").prop("checked"));
        var hasBigDogGroom      = boolIntValue($("#updatePlace").find("input[id='input_hasBigDogGroom']").prop("checked"));
        var hasSmallDogGroom    = boolIntValue($("#updatePlace").find("input[id='input_hasSmallDogGroom']").prop("checked"));

        var UID                 = $("#updatePlace").find("label[id='input_UID']").val();


        console.log("UID : " + UID);
        console.log("placeType : " + placeType);


        //AJAX
        $.ajax({
            type     : "POST",
            url      : "placeUpdate.php",
            data     :
                        {
                            placeName           : placeName,
                            placeType           : placeType,
                            phoneNum            : phoneNum,
                            latitude            : latitude,
                            longitude           : longitude,
                            blogURL             : blogURL,
                            naverDetailURL      : naverDetailURL,
                            websiteURL          : websiteURL,
                            doroAddress         : doroAddress,
                            bunjiAddress        : bunjiAddress,
                            holidayTime         : holidayTime,
                            sundayTime          : sundayTime,
                            saturdayTime        : saturdayTime,
                            weekdayTime         : weekdayTime,
                            open24HR            : open24HR,
                            hasSwimPool         : hasSwimPool,
                            hasIndoorEntrance   : hasIndoorEntrance,
                            hasOutdoorEntrance  : hasOutdoorEntrance,
                            hasAdoption         : hasAdoption,
                            hasTraining         : hasTraining,
                            hasKindergarten     : hasKindergarten,
                            hasFuneral          : hasFuneral,
                            hasGoods            : hasGoods,
                            hasDiet             : hasDiet,
                            hasCatHotel         : hasCatHotel,
                            hasBigDogHotel      : hasBigDogHotel,
                            hasSmallDogHotel    : hasSmallDogHotel,
                            hasSelfGroom        : hasSelfGroom,
                            hasCatAnesGroom     : hasCatAnesGroom,
                            hasCatGroom         : hasCatGroom,
                            hasBigDogGroom      : hasBigDogGroom,
                            hasSmallDogGroom    : hasSmallDogGroom,
                            UID                 : UID
                        },
            dataType : "JSON",
            success  : function(data)
            {
                console.log(data);
                location.reload();
            },
            error : function(xhr, option, error)
            {
                console.log(xhr.responseText);
                console.log(xhr.status);
                alert("code : "+xhr.status+"\n"+"message : "+xhr.responseText+"\n"+"error : "+error);
            }
        });

    }

    $(".deletePlace").click(function()
    {
        var $row                = $(this).closest("tr");
        var $modal              = $('#deletePlace');

        /* prepare data */
        var UID                 = $row.find(".UID").text();

        //receivedTime
        $('label[id = input_UID]').val(UID);

        //show modal
        $modal.modal('show');

    });

    function deletePlace()
    {
        //prepare argument
        var UID = $("#deletePlace").find("label[id='input_UID']").val();

        //AJAX
        $.ajax({
            type     : "POST",
            url      : "placeDelete.php",
            data     : { UID : UID },
            dataType : "JSON",
            success  : function(data)
            {
                console.log(data);
                location.reload();
            },
            error : function(xhr, option, error)
            {
                console.log(xhr.responseText);
                console.log(xhr.status);
                alert("code : "+xhr.status+"\n"+"message : "+xhr.responseText+"\n"+"error : "+error);
            }
        });

    }

</script>
</body>
</html>