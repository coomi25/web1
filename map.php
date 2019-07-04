<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>오시는길</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/gnb.js"></script>
    <script src="js/sub.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/map.js"></script>
    
</head>
<body onload="initialize()">
    <div class="wrap">
        <?php include 'include/header.php';?>
        <div class="contents_wrap">
            <div class="sub_top">
                <div class="sub_top_tit_wrap">
                    <div class="page_nav">
                       <ul>
                            <li><a href="#"><img src="images/bread_home.png" alt="Home"></a></li>
                            <li>알림마당</li>
                            <li>오시는길</li>
                        </ul>
                    </div><!--//page_nav-->
                    <div class="sns_menu">
                        <ul>
                            <li class="facebook">
                                <a href="#">페이스북 공유하기</a>
                            </li>
                            <li class="twitter">
                                <a href="#">페이스북 공유하기</a>
                            </li>
                            <li class="print">
                                <a href="#">페이스북 공유하기</a>
                            </li>
                        </ul>
                    </div><!--//page_nav-->
                    <h2><img src="images/sv4_1.jpg" alt="알림마당"></h2>
                </div><!--//sub_top_tit_wrap-->
                <div class="sub_top_menu_wrap">
                    <ul>
                        <li><a href="about.php">한국문화의집 소개</a></li>
                        <li><a href="map.php" class="on">오시는길</a></li>
                        <li><a href="#">시설안내</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="boardList.php">Q&amp;A</a></li>
                    </ul>
                </div><!--//sub_top_menu_wrap-->
            </div><!--//sub_top-->
            <div class="sub_con">
                <div id="map_view"></div>
                
            </div><!--//sub_con-->
        </div><!--//contents_wrap-->
        <?php include 'include/footer.php';?>
    </div><!--//wrap-->
</body>
</html>