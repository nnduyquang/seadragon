<style>

    div#fullpage {
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
        width: 260px;
        height: auto;
        transition: .3s;
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
        background-image: url({{URL::asset('imgs/111a-min_opt.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }

    div#section0 h5, div#section0 h6 {
        color: white;
        text-shadow: 1px 1px 8px #0b2e13;
        font-size: 6vw;
        margin: auto;

    }

    div#section0 h6 {
        font-size: 22px;
        color: white;
    }

    div#section0 h5 {
        font-family: 'Asap Condensed', sans-serif;
        position: relative;
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

    div#section1 {
        background-image: url({{URL::asset('imgs/1499396844a138img.png')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        text-shadow: 1px 1px 8px #0b2e13;
        font-family: 'Asap Condensed', sans-serif;
    }

    div#section1 h5 {
        font-size: 8vh;
    }

    div#section1 p {
        font-size: 16px;
    }

    div#section2 {
        font-family: 'Asap Condensed', sans-serif;
        background-image: url({{URL::asset('imgs/bg3.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        color: white;
        /*text-shadow: 1px 1px 33px #000;*/
    }

    div#section2 p {
        font-size: 18px;
        text-shadow: 1px 1px 30px #000;
        /*background-color: rgba(00,00,00,0.3);*/
    }

    div#section2 h5 {
        width: fit-content;
        font-size: 8vh;
        position: relative;
        width: fit-content;
        margin: auto;
        padding-bottom: 20px;
        text-shadow: 1px 1px 1px #0b2e13;
        z-index: 20;
    }

    div#section2 h5:before {
        content: '';
        position: absolute;
        width: 50%;
        height: 2px;
        background-color: #fff;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 100;
        text-shadow: 1px 1px 1px #0b2e13;
    }

    div#section0 a, div#section2 a, div#section1 a {
        border: 1px solid white;
        color: white;
        font-size: 13px;
        padding: 8px 10px;
        background-color: rgba(32, 57, 2, 0.9);
        font-weight: 600;
        transition: .3s;
        text-shadow: 1px 1px 1px #012392;
    }

    div#section0 a:hover, div#section2 a:hover, div#section1 a:hover {
        text-decoration: none;
        color: white;
        background-color: #f3ca0d;
        border: 1px solid #f3ca0d;
    }

    div#section3 {
        background-image: url({{URL::asset('imgs/bg13.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        overflow: hidden;
    }

    div#section4 {
        background-color: #013b5f;
    }

    div#section4 h5 {
        position: relative;
        width: fit-content;
        margin: auto;
        margin-bottom: 28px;
    }

    div#section4 h5:before {
        position: absolute;
        content: '';
        height: 2px;
        width: 60%;
        background-color: #fff;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
    }

    div#menu_r {
        position: fixed;
        right: 28px;
        top: 20px;
        z-index: 21;
        cursor: pointer;
        font-size: 30px;
        color: white;
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
        border: 1px solid white;
        border-radius: 50%;
        padding: 10px;
        transition: .2s;
    }

    div.call-btn a:hover {
        text-decoration: none;
    }

    img.arrow-down {
        position: absolute;
        left: 48.4%;
        transform: translateX(-50%);
        width: 38px;
        bottom: 0;
        transition: .3s;
    }

    div.menu-content {
        width: auto;
        right: -260px;
        height: 100%;
        background-color: #fff;
        position: fixed;
        top: 0;
    }

    div.menu-content ul {
        list-style-type: none;
        margin-top: 38px;
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

    div.menu-content a.active {
        color: #3d8d00;
    }

    i.fa-times {
        display: none;
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

    div.ttdan-gia {
        height: auto;
        width: 60%;
        margin: auto;
        transition: .3s;
    }

    img.img-baogia {
        transition: .5s;
        opacity: 1;
    }

    button.tat-baogia {
        background-color: transparent;
        border: none;
        cursor: pointer;
        transition: .3s;
    }

    .fa-times-circle {
        transition: .3s;
    }

    .fa-times-circle:hover {
        -ms-transform: rotate(360deg); /* IE 9 */
        -webkit-transform: rotate(360deg); /* Safari 3-8 */
        transform: rotate(360deg);
    }

    button.tat-baogia:hover {
        -ms-transform: rotate(20deg); /* IE 9 */
        -webkit-transform: rotate(20deg); /* Safari 3-8 */
        transform: rotate(20deg);
    }

    .phone-num {
        color: white;
        transition: .6s;
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

    #myVideo {
        position: absolute;
        right: 0;
        bottom: 0;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        background-size: 100% 100%;
        background-position: center center;
        background-size: contain;
        object-fit: cover;
        z-index: 3;
    }


    #section3 .layer {
        position: absolute;
        z-index: 14;
        text-align: center;
        width: 100%;
        left: 0;
        top: 73%;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
        transition: .3s;
    }


    #infoMenu li a {
        color: #fff;
    }



    .play-stop-button i {
        color: #1b1e21;
        opacity: 0.5;
        transition: .5s;

    }

    .play-stop-button:hover {
        text-decoration: none;
    }

    .play-stop-button:hover i {
        color: #ffffff;
        opacity: 1;

    }

    #trang_dau {
        transition: .3s;
        opacity: 0;
    }


    @media screen and (max-width: 999px) and (min-width: 652px){

        div#trang_dau{
            padding-bottom: 38px;
        }

        div#section2-slide2{
            padding-bottom: 45px;
        }

        div#section3-slide{
            padding-bottom: 58px;
        }

        img.logo{
            width: 168px;
            height: auto;
        }

        .ttdan-gia{
            width: 70%;
            height: auto;
        }

        #section3 .layer {
            top: 53%;

        }

        img.arrow-down {
            left: 48%;
            width: 26px;
        }

        #h5-danBox {
            font-size: 30px;
            margin-bottom: 8px;
            /*background-color: #fff;*/
        }
    }



</style>
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Saira+Extra+Condensed" rel="stylesheet">

{{--Phần báo giá mừng khai trương sao này thai vô bằng báo giá--}}


<div class="ttdan-form text-center d-flex align-items-center">

    <div class="ttdan-gia animated fadeInUp delay-1s">
        <img class="img-baogia" src="{{URL::asset('imgs/banner1.jpg')}}" alt=""
             style="width: 100%;height: auto;">
    </div>

    <button class="tat-baogia animated fadeInUp delay-1s"
            style="position: fixed;right: 20px;top: 20px;color: white;font-size: 30px">
        <i class="far fa-times-circle"></i>
    </button>

</div>

{{--phần full page js--}}

<div id="fullpage">
    <div id="menu" class="d-flex justify-content-between align-items-center">

        <img src="{{URL::asset('imgs/logo/logo2.png')}}" alt="" class="logo animated fadeIn slower">

        <div data-menuanchor="firstPage" class="active d-flex align-items-center">
                Copyright © 2018 by <b>	&nbsp; Smartlinks</b>.
            <a class="scnw ml-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="scnw ml-3" href=""><i class="fab fa-youtube"></i></a>
        </div>


        <div class="menu-content">
            <ul>
                <li id="menu-01"><a class="active" href="">TRANG CHỦ</a></li>
                <li id="menu-02" class=""><a href="thong-tin-du-an-sea-dragon.html">GIỚI THIỆU</a></li>
                <li id="menu-03"><a href="">VỊ TRÍ</a></li>
                <li id="menu-04"><a href="">GIÁ CHƯƠNG TRÌNH ƯU ĐÃI</a></li>
                <li id="menu-05"><a href="">PHÁP LÝ THANH TOÁN</a></li>
                <li id="menu-06"><a href="">LIÊN HỆ ĐẬT CHỔ</a></li>
            </ul>
        </div>

        <img src="{{URL::asset('imgs/arrow-down.png')}}" alt="" class="animated fadeInDown infinite arrow-down">

        <div class="btn-ttdu">
            <button id="btn_nhantt">NHẬN THÔNG TIN DỰ ÁN</button>
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
        <div id="trang_dau">
            <H5><span style="color: #e6c953;">SEA DRAGON</span> ĐỊA THẾ VÀNG</H5>
            <h6 class="mb-4">KHÔNG GIAN NGHĨ DƯỠNG - THIÊN ĐƯỜNG DU LỊCH</h6>
            <a class="mt-5" href="thong-tin-du-an-sea-dragon.html">XEM CHI TIẾT</a>
        </div>
    </div>

    <div class="section" id="section1">
        <div id="section2-slide2" class="intro">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="">
                        <H5><span style="color: #e6c953;">SEA DRAGON</span> VỊ TRÍ TIỀM NĂNG</H5>
                        <p class="">Sea Dragon tọa lạc về Phía Đông Nam của trung tâm hành chính tỉnh,
                            <br> nằm trong bán kính 5km được quy hoạch về khu dân cư đô thị phục vụ cho sự phát triển
                            <br>lên đô thị loại 1 của thành phố. ...</p>
                        <a href="{{URL::asset('vitri.html')}}">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section position-relative" id="section2">
        <div id="section3-slide" class="intro position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center" style="margin: auto">
                        <h5>CHƯƠNG TRÌNH ƯU ĐÃI</h5>
                        <p class="" style="background-color:rgba(00,00,00,0,3);">Trã trước 30% hỗ trợ vai 70% từ ngân hàng <br>
                        Chương trình được áp dụng từ tháng 08-1028 đến tháng 12-2018 <br>
                        Ữu đãi nội thất cho 50 khách hàng đầu tiên.</p>
                        <a href="">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="section3">
        <video id="myVideo" loop data-autoplay>
            <source src="http://sky89.vn/download/PHIM CHINH THUC.mp4"
                    type="video/mp4; codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
        </video>
        <div class="layer pb-5">
            <a class="play-stop-button" href="javascript:void(0) " onclick="playPause()">
                <i class="far fa-play-circle fa-3x"></i>
                <i class="far fa-pause-circle fa-3x"></i>
            </a>
        </div>
    </div>


    {{--phần slider thông tin công ty--}}
    <div class="section" id="section4">

        <div class="container">
            <div class="row">
                <div id="about_comp2" class="col-md-12 text-center animated fadeInDown">
                    <img src="{{URL::asset('imgs/logo.png')}}" alt="" class="img-vap">
                </div>
                <div id="about_comp" class="col-md-12 text-center text-white pb-5 mt-3">
                    <h5>TẬP ĐOÀN VẠN AN PHÁT</h5>
                    <p>160 Võ Thị Sáu, P6, Q3, TP HCM <br>
                        Điện Thoại: 0909 09 09 09 Email:Info@vananphat.com.vn</p>
                </div>
            </div>
        </div>

    </div>


</div>

@section('script')


@stop