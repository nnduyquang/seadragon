
<style>

    div#fullpage2 {
        position: relative;
    }

    div#menu {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        color: white;
        text-align: center;
        margin: 0;
        padding: 0;
        list-style-type: none;
        padding: 20px 30px;
    }

    img.logo {
        position: fixed;
        left: 20px;
        top: 15px;
        z-index: 21;
        width: 218px;
        height: auto;

    }

    div.btn-ttdu {
        position: absolute;
        left: 50%;
        bottom: 68px;
        z-index: 300;
        transform: translateX(-50%);
        border: 1px solid rgba(255, 255, 255, 0.8);
        padding: 8px;
        cursor: pointer;
        box-sizing: border-box;
        transition: .3s;
    }

    div.btn-ttdu:hover {
        border: 5px solid rgba(255, 255, 255, 0.8);
        padding: 4px;
    }

    div.btn-ttdu button {
        font-weight: 600;
        font-size: 14px;
        color: #204a01;
        font-weight: 600;
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        padding: 8px 13px;
        cursor: pointer;
        transition: .3s;
    }

    div.btn-ttdu button:hover {
        color: white;
        background-color: #f3ca0d;
    }

    div#section0 {
    {{--background-image: url({{URL::asset('imgs/bg/bg2.jpg')}});--}}
    {{---webkit-background-size: cover;--}}
    {{--background-size: cover;--}}
    {{--background-position: center center;--}}


}

    div#section0 div#trang_dau {
        height: 100vh;
        width: calc(100% - 440px);
        background-image: url({{URL::asset('imgs/bg/bg2.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;

    }

    div#section1 div#trang_dau1 {
        height: 100vh;
        width: calc(100% - 440px);
        background-image: url({{URL::asset('imgs/1499396844a138img.png')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        float: left;

    }

    div#section2 div#trang_dau2 {
        height: 100vh;
        width: calc(100% - 440px);
        background-image: url({{URL::asset('imgs/pictures_library_3694_20170505094400_9702.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        float: left;

    }




    div.info-content h5 {
        /*color: #0b2e13;*/
        position: fixed;
        right: 70px;
        top: 22px;
        width: fit-content;
        margin-bottom: 10px;
    }

    div#section0 h5:before {
        position: absolute;
        content: '';
        height: 2px;
        width: 55%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #fff;
        bottom: -6px;

    }


    div#section1 h2 {
        font-size: 38px;
    }

    div#section1 p {
        font-size: 13px;
    }


    div#section2 p {
        font-size: 13px;
    }

    div#section2 h5 {
        width: fit-content;
        font-size: 36px;
        position: relative;
        width: fit-content;
        margin: auto;
        padding-bottom: 20px;
        text-shadow: 1px 1px 1px #0b2e13;
        z-index: 20;
    }




    div#menu_r {
        position: fixed;
        right: 28px;
        top: 20px;
        z-index: 21;
        cursor: pointer;
        font-size: 30px;
        color: #203902;
    }

    div#menu a {
        /*color: white;*/
        font-size: 14px;
    }

    div#menu a.scnw {
        font-size: 22px;
        color: white;
    }

    div.call-btn {
        z-index: 10;
        font-family: Impact, Charcoal, sans-serif;
    }

    .phone-i {
        transition: .6s;
    }

    div.call-btn div i {
        font-size: 15px;
        border: 1px solid #203902;
        border-radius: 50%;
        padding: 10px;
        transition: .2s;
        color: #203902;
    }

    div.call-btn a:hover {
        text-decoration: none;
    }

    img.arrow-down {
        position: absolute;
        left: 48.5%;
        transform: translateX(-50%);
        width: 38px;
        bottom: 0;
    }

    div.menu-content {
        width: auto;
        right: -260px;
        height: 100%;
        background-color: #fff;
        position: fixed;
        top: 0;
        z-index: 3;
    }

    div.menu-content ul {
        list-style-type: none;
        margin-top: 60px;
        padding: 0;

    }

    div.menu-content ul li {
        text-align: left;
        padding: 10px 6px;
        margin: 0 30px;
        border-bottom: 1px dotted #0b2e13;
    }

    div.menu-content ul li a {
        color: #0b2e13;
    }

    div.menu-content ul li a:hover {
        text-decoration: none;
        color: #3d8d00;
    }

    li#menu-02 .active {
        color: #3d8d00;
    }

    div.info-content {
        position: fixed;
        right: 40px;
        top: 0;
        z-index: 1;
        height: fit-content;
        width: fit-content;
        background-color: transparent;
    }

    i.fa-times {
        display: none;
    }
    .phone-num {
        color: #0b2e13;
        transition: .6s;
    }

    div.ttdan-form {
        width: 100%;
        height: 0;
        background-color: rgba(1, 37, 53, 0.9);
        position: absolute;
        z-index: 10;
        bottom: 0;
        transition: 0.6s;
    }





    /*phần bg video*/

    h1 {
        font-size: 5em;
        font-family: arial, helvetica;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    /* Centered texts in each section
    * --------------------------------------- */
    .section {
        text-align: center;
        overflow: hidden;
    }


    /*solves problem with overflowing video in Mac with Chrome */
    /* Bottom menu
    * --------------------------------------- */
    #infoMenu li a {
        color: #fff;
    }

    /* Hiding video controls
    * See: https://css-tricks.com/custom-controls-in-html5-video-full-screen/
    * --------------------------------------- */
    /*video::-webkit-media-controls {*/
    /*display: none !important;*/
    /*}*/



    ul#menu2{
        width: fit-content;
        box-shadow: 3px 3px 15px #aaaaaa;
        margin: auto;
        margin-top: 86px;
    }

    ul#menu2 li{
        display: inline-flex;
        box-sizing: border-box;
        margin-right: -5px;
    }

    ul#menu2 li:nth-child(0){

    }

    ul#menu2 li a{
        background-color: #4c7603;
        padding: 6px 10px;
        color: white;
    }

    ul#menu2 li a:hover{
        text-decoration: none;
        background-color: #0b2e13;
        color: white;
    }

    ul#menu2 li a#active1{
        background-color: #0b2e13;
    }

    #gioi-thieu-du-an p{
        padding: 20px 18px 20px 30px;
        color: #76a603;
        font-size: 13px;
        height: 68%;
        display: block;
        overflow-y: auto;
        transition: .5s;
        margin-top: 118px;
        width: 440px;
        z-index: 80;
        position: absolute;
        top: 0;
        right: 0
    }

    #tt-du-an p{
        padding: 20px 18px 20px 30px;
        color: #76a603;
        font-size: 13px;
        height: 68%;
        display: block;
        overflow-y: auto;
        transition: .5s;
        margin-top: 118px;
        width: 440px;
        z-index: 80;
        position: absolute;
        top: 0;
        right: 0
    }

    #cdt-du-an p{
        padding: 20px 18px 20px 30px;
        color: #76a603;
        font-size: 13px;
        height: 68%;
        display: block;
        overflow-y: auto;
        transition: .5s;
        margin-top: 118px;
        width: 440px;
        z-index: 80;
        position: absolute;
        top: 0;
        right: 0
    }

    /* width */
    ::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }


</style>
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Saira+Extra+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo|Cousine" rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="/seadragon/fullpage/dist/examples.css" />--}}
{{--Phần báo giá mừng khai trương sao này thai vô bằng báo giá--}}


{{--phần full page js--}}

<div id="fullpage2">
    <div id="menu" class="d-flex justify-content-between align-items-center">

        <img src="{{URL::asset('imgs/logo/logo2.png')}}" alt="" class="logo animated fadeInRight slower">

        <div data-menuanchor="firstPage" class="active d-flex align-items-center">
            <a href="javascript:void(0) " style="color: white">
                Copyright © 2018 by <b>Smartlinks</b>. All Right Reserved.
            </a>
            <a class="scnw ml-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="scnw ml-3" href=""><i class="fab fa-youtube"></i></a>
        </div>




        <div class="menu-content shadow-lg">
            <ul>
                <li id="menu-01"><a class="" href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
                <li id="menu-02"><a style="color: #3d8d00;" href="thong-tin-du-an-sea-dragon.html">GIỚI THIỆU</a></li>
                <li id="menu-03"><a href="{{URL::asset('/vitri.html')}}">VỊ TRÍ</a></li>
                <li id="menu-04"><a href="">GIÁ CHƯƠNG TRÌNH ƯU ĐÃI</a></li>
                <li id="menu-05"><a href="">PHÁP LÝ THANH TOÁN</a></li>
                <li id="menu-06"><a href="">LIÊN HỆ ĐẬT CHỔ</a></li>
            </ul>
        </div>


        <img src="{{URL::asset('imgs/arrow-down.png')}}" alt="" class="animated fadeInDown infinite arrow-down">

        <div class="btn-ttdu animated fadeIn slow">
            <button id="btn_nhantt">NHẬN THÔNG TIN DỰ ÁN</button>
        </div>

        <div class="info-content ">
            <h5 style="color: #203902" class="animated flipInX slow">GIỚI THIỆU</h5>



            <ul id="menu2" class="list-unstyled position-relative animated fadeInUp" style="z-index: 90">
                <li data-menuanchor="firstPage" >
                    <a id="active1" href="#firstPage" style="border-radius: 5px 0px 0px 5px;">GIỚI THIỆU DỰ ÁN</a>
                </li>
                <li data-menuanchor="secondPage">
                    <a id="active2" href="#secondPage">THÔNG TIN DỰ ÁN</a>
                </li>
                <li data-menuanchor="3rdPage">
                    <a id="active3" href="#3rdPage" style="border-radius: 0px 5px 5px 0px;">CHỦ ĐẦU TƯ</a>
                </li>
            </ul>


        </div>

        <div id="menu_r">
            <i class="fas fa-bars"></i>
            <i class="fas fa-times"></i>
            <p class="menu_r-menu mt-0 pt-0" style="font-size: 14px">
                menu
            </p>
        </div>

        <div data-menuanchor="3rdPage" class="call-btn d-flex align-items-center">
            <div class="pr-3"><i class="fas fa-phone phone-i"></i></div>
            <a href="#3rdPage" style="font-size: 22px;font-weight: 500" class="phone-num">0909 86 86 86</a>
        </div>
    </div>

    <div class="section position-relative" id="section0">
        <div id="trang_dau" style="">

        </div>
        <div id="gioi-thieu-du-an"  style="" class="text-left">
            <p class="animated fadeInRight delay-500ms">
            Sea Dragon là dự án trực thuộc tỉnh Bà Rịa – Vũng Tàu, nằm trong vùng đô thị lân
            cận trong vòng bán kính 5 km xung quanh trung tâm hành chính của thành phố. Sở hữu
            một vị thế đắc địa về giao thông khi kết nối giữa tam giác Đô Thị - Du Lịch – Kinh
            Tế là Vũng Tàu – Bà Rịa – Long Hải. Cách trung tâm Bà Rịa và Vũng Tàu chỉ năm phút
            di chuyển, kết nối với tuyến đường cao tốc Biên Hòa Vũng tàu chỉ 1km, nằm trong long
            khu dân cư phát triển bậc nhất của tỉnh.
            <br>
            <br>
            Với quy mô sấp xỉ 300 sản phẩm, rộng gần 4 héc-ta, dự án Sea Dragon khẳng định vị thế
            vượt trội và tiềm năng sinh lười rất lớn trong thời gian tới.

        </div>

    </div>

    <div class="section" id="section1">
        <div id="trang_dau1" style="">

        </div>
        <div id="tt-du-an"  style="" class="text-left">
            <p>
                Bà Rịa – Vũng Tàu là một trung tâm kinh tế - dịch vụ - du lịch ven biển của vùng Đông Nam Bộ và là
                tỉnh phát triển thứ hai chỉ đứng sau Thành phố Hồ Chí Minh. Theo số liệu của tổng cục thống kê Việt
                Nam trong năm 2017, Bà Rịa – Vũng Tàu là đơn vị hành chính có thu nhập bình quân đầu người (GDP) cao
                thứ ba cả nước chỉ sau Tp.HCM và Hà Nội. Ngoài lợi thế là thành phố biển của ngõ về xuất nhập khẩu hàng
                hóa và khai thác dầu khí, Bà Rịa – Vũng Tàu còn là trung tâm du lịch số một của Đông Nam Bộ và một phần
                Đồng Bằng song Cửu Long. <br>
                <br>

                Định hướng đến năm 2020, tỉnh trở thành thành phố cảng, đô thị cảng lớn nhất cả nước cùng với Hải Phòng
                và là trung tâm Logistics và công nghiệp hỗ trợ, trung tâm công nghiệp quan trọng số một của cả nước. Theo
                đó , GDP bình quân đầu người dự báo đạt 27.000 USD / người / năm (tương đương thu nhập của các quốc gia G20).
                <br>
                <br>

                Chỉ trong vòng 3 đến 5 năm tới, Bà Rịa – Vũng Tàu sẽ trở thành thành phố phát triển nhộn nhịp chỉ đứng sau
                Tp.HCM và Hà Nội khi đang là tỉnh nắm giữ tỷ lệ phát triển đô thị hóa đứng top đầu cả nước với 51%.
                <br>
            </p>
        </div>
    </div>

    <div class="section position-relative" id="section2">
        <div id="trang_dau2" style="">
        </div>
        <div id="cdt-du-an"  style="" class="text-left">
            <p>
            Bất Động Sản VẠN AN PHÁT được thành lập xuất phát từ nhu cầu an cư lạc nghiệp và đầu tư sinh lợi của khách hàng.
            <br><br>
            Với đội ngũ nhân viên chuyên nghiệp và nhiệt huyết, chúng tôi đã và đang phát triển không ngừng để trở
            thành “nơi trao gửi niềm tin” trọn vẹn mà khách hàng luôn nghĩ đến.
            <br><br>
            Cốt lõi cho sự phát triển của một doanh nghiệp xuất phát từ chính nguồn nhân lực vững mạnh. BĐS Vạn An Phát
            tự hào là môi trường làm việc chuyên nghiệp và mang đến mọi cơ hội để tất cả thành viên công ty phát huy mọi
            tài năng của mình.

            <br><br>
            Năm 2017, trụ sở Võ Thị Sáu – BĐS Vạn An Phát chính thức được thành lập và đánh dấu bước đi ngày càng phát
            triển của công ty. Cùng với hệ thống sàn giao dịch tại hai chi nhánh Phan Đăng Lưu và chi nhánh Phan Xích Long,
            Vạn An Phát mang đến sự chuyên nghiệp tuyệt đối dành cho mọi khách hàng.
            </p>
        </div>
    </div>


</div>