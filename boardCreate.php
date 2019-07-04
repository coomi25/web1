<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Q&amp;A</title>
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/gnb.js"></script>
    <script src="js/sub.js"></script>
</head>
<body>
   <div class="wrap">
       <?php include 'include/header.php';?>
        <div class="content">
            <div class="sub_top">
                <div class="sub_top_tit_wrap">
                    <div class="page_nav">
                       <ul>
                            <li><a href="#"><img src="images/bread_home.png" alt="Home"></a></li>
                            <li>알림마당</li>
                            <li>한국문화의집소개</li>
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
                        <li><a href="map.php">오시는길</a></li>
                        <li><a href="#">시설안내</a></li>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="boardList.php" class="on">Q&amp;A</a></li>
                    </ul>
                </div><!--//sub_top_menu_wrap-->
            </div><!--//sub_top-->
            <div class="sub_con">
                <h3>Q&amp;A등록</h3>
                <p class="must_txt">* 표시는 필수 입력 사항입니다.</p>
                <form id="boardCreateForm" name="boardCreateForm" action="" method="post">
                    <table class="wtl" summary="문의구분선택, 제목, 작성자, 작성일,비밀번호, 내용 등의 내용을 포함한 표">
                       <caption>Q&amp;A 등록</caption>
                       <colgroup>
                           <col style="width:20%">
                           <col style="width:80%">
                       </colgroup>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <span class="essential">*</span>
                                    <label for="qa">문의 구분 선택</label>
                                </th>
                                <td>
                                   <select id="qa" name="" class="">
                                        <option selected>선택</option>
                                        <option value="">교육</option>
                                        <option value="">공연</option>
                                        <option value="">기타</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="essential">*</span>
                                    <label for="subject">제목</label>
                                </th>
                                <td>
                                    <input type="text" id="subject" class="w50" maxlength="100">
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="essential">*</span>
                                    <label for="name">작성자</label>
                                </th>
                                <td><input type="text" id="name" class="w20"></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="essential">*</span>
                                    <label for="pw">비밀번호</label>
                                </th>
                                <td>
                                    <input type="password" class="w20" id="pw">
                                    <span class="ex"><strong>8~20자, 영문, 숫자, 특수 문자를 포함</strong>하여야 합니다.<br>등록하신 글 수정,삭제 시 비밀번호가 필요합니다.</span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="essential">*</span>
                                    <label for="inquery">내용</label>
                                </th>
                                <td>
                                    <textarea rows="10" cols="30" maxlength="2000" id="inquery"></textarea>
                                    <span class="ex">최대 2000자 까지 작성 가능합니다.</span>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--//wtl-->
                    <div class="btn_wrap">
                        <a href="#" class="btn_regist btn">등록</a>
                        <a href="#" class="btn_list btn">목록</a>
                    </div><!--//btn_wrap-->
                </form><!--//boardCreateForm-->
            </div><!--//sub_con-->
        </div><!--//content-->
        <?php include 'include/footer.php';?>
    </div><!--//wrap-->
</body>
</html>