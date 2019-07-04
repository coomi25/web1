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
        <div class="contents_wrap">
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
                <form class="sch_form">
                    <span>구분
                        <select>
                            <option value selected>전체</option>
                            <option value="5">교육</option>
                            <option>공연</option>
                            <option>기타</option>
                        </select>
                    </span>
                    <span>검색어
                         <input  type="text" maxlength="50">
                    </span>
                    <button>검색</button>
                </form><!--//sch_form-->
                <table class="dtl">
                    <caption>한국문화의집 Q&amp;A(질의응답) 표 입니다. 번호, 구분, 제목, 상태, 작성자, 작성일, 조회수 로 구성되어 있습니다.</caption>
                    <colgroup>
                        <col width="7%;">
                        <col width="7%;">
                        <col width="auto;">
                        <col width="10%;">
                        <col width="10%;">
                        <col width="10%;">
                        <col width="10%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">번호</th>
                            <th scope="col">구분</th>
                            <th scope="col">제목</th>
                            <th scope="col">상태</th>
                            <th scope="col">작성자</th>
                            <th scope="col">작성일</th>
                            <th scope="col">조회수</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>43</td>
                            <td>기타</td>
                            <td><a href="#" class="tit">판매자 제안건</a></td>
                            <td><a href="#" class="qa_ing">검토중</a></td>
                            <td>트&#42;&#42;&#42;</td>
                            <td>2017-03-06</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>42</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">교육을 받을수 있는 자격은 구헤자 선생이 결정하는지 답변주세요&#46;</a></td>
                            <td><a href="#" class="qa_ing">검토중</a></td>
                            <td>빈&#42;&#42;</td>
                            <td>2017-03-04</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>41</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">교육 관련 질문드립니다</a></td>
                            <td><a href="#" class="qa_ing">검토중</a></td>
                            <td>사&#42;</td>
                            <td>2017-02-28</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>40</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">침선반 기초</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>오&#42;&#42;</td>
                            <td>2017-02-28</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>39</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">소목 수공구를 미리 알려주셨으면 좋겠어요</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>유&#42;&#42;</td>
                            <td>2017-02-27</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>38</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">전통목가구반 준비물</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>길&#42;&#42;</td>
                            <td>2017-02-27</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>37</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">소목반 준비물</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>김&#42;&#42;</td>
                            <td>2017-02-23</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">이번 소목강의 준비물은&#63;&#63;&#63;</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>유&#42;&#42;</td>
                            <td>2017-03-06</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>35</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">수강신청관련</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>장&#42;&#42;</td>
                            <td>2017-02-21</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>33</td>
                            <td>교육</td>
                            <td><a href="#" class="tit">문의드립니다</a></td>
                            <td><a href="#">답변완료</a></td>
                            <td>큐&#42;</td>
                            <td>2017-02-18</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table><!--//dtl-->
                <div class="pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div><!--//pagination-->
                <div class="btn_wrap">
                    <a href="boardCreate.php" class="regist1 btn1">등록</a>
                    <a href="#" class="list1 btn1">목록</a>
                </div><!--//btn_wrap-->
            </div><!--//sub_con-->
        </div><!--//contents_wrap-->
        <?php include 'include/footer.php';?>
    </div><!--//wrap-->
</body>
</html>