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
        background-image: url({{URL::asset('imgs/bg11.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }

    div#section0 h5,div#section0 h6{
        color: white;
        text-shadow: 1px 1px 10px #012392;
        font-size: 6vw;
        margin: auto;
        font-family: 'Asap Condensed', sans-serif;
    }
    div#section0 h6{
        font-size: 3vw;
    }
    div#section0 h5{

        position: relative;
        width: fit-content;
        margin-bottom: 10px;
    }

    div#section0 h5:before{
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
        background-image: url({{URL::asset('imgs/Biet-thu.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        text-shadow: 1px 1px 1px #012392;
    }

    div#section1 h2{
       font-size: 38px;
    }

    div#section1 p{
        font-size: 20px;
    }

    div#section2 {
        background-image: url({{URL::asset('imgs/bg3.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
        color: white;
        text-shadow: 1px 1px 1px #012392;
    }

    div#section2 p{
        font-size: 20px;
    }

    div#section2 h5 {
        width: fit-content;
        font-size: 36px;
        position: relative;
        width: fit-content;
        margin: auto;
        padding-bottom: 20px;
        text-shadow: 1px 1px 1px #012392;
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
        text-shadow: 1px 1px 1px #012392;
    }

    div#section2 a {
        border: 1px solid white;
        color: white;
        font-size: 13px;
        padding: 8px 10px;
        background-color: rgba(255, 255, 255, 0.1);
        font-weight: 600;
        transition: .3s;
        text-shadow: 1px 1px 1px #012392;
    }

    div#section2 a:hover {
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
        background-image: url({{URL::asset('imgs/bg5.jpg')}});
        -webkit-background-size: cover;
        background-size: cover;
        background-position: center center;
    }

    div#section5 {
        background-color: #013b5f;
    }

    div#section5 h5 {
        position: relative;
        width: fit-content;
        margin: auto;
        margin-bottom: 28px;
    }

    div#section5 h5:before {
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
        width: 50%;
        height: 70%;
        margin: 12% 25%;
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
        object-fit: cover; /*cover video background */
        z-index: 3;
    }

    /* Layer with position absolute in order to have it ver the video
    * --------------------------------------- */
    #section3 .layer {
        position: absolute;
        z-index: 14;
        width: 100%;
        left: 0;
        top: 73%;
        -webkit-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
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
    video::-webkit-media-controls {
        display: none !important;
    }

    .play-stop-button i{
        color: #1b1e21;
        opacity: 0.5;
        transition: .5s;

    }
    .play-stop-button:hover{
    text-decoration: none;
    }
    .play-stop-button:hover i{
        color: #ffffff;
        opacity: 1;

    }

    #trang_dau{
        transition: .3s;
        opacity: 0;
    }

</style>
<link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Saira+Extra+Condensed" rel="stylesheet">
{{--Phần báo giá mừng khai trương sao này thai vô bằng báo giá--}}
<div class="ttdan-form">

    <div class="ttdan-gia animated fadeInUp delay-1s">
        <img class="img-baogia" src="{{URL::asset('imgs/banner1.png')}}" alt=""
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
            <a href="#firstPage" style="color: white">
                Copyright © 2018 by <b>Smartlinks</b>. All Right Reserved.
            </a>
            <a class="scnw ml-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="scnw ml-3" href=""><i class="fab fa-youtube"></i></a>
        </div>


        <div class="menu-content">
            <ul>
                <li id="menu-01"><a class="active" href="">TRANG CHỦ</a></li>
                <li id="menu-02" class=""><a href="">GIỚI THIỆU</a></li>
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
        <H5>SEA DRAGON ĐỊA THẾ VÀNG</H5>
        <h6>VỊ TRÍ VÀNG BÀ RỊA VŨNG TÀU</h6>
        </div>
    </div>

    <div class="section" id="section1">
        <div id="section2-slide2" class="intro">
            <div class="row">
                <div class="col-md-12 text-right pr-5">
            <h2>VỊ TRÍ DỰ ÁN</h2>
            <p class="">Go to the first section and scroll up or to the <br>
                last one and scroll down
                to see how it works.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section position-relative" id="section2">
        <div id="section3-slide" class="intro position-relative">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center" style="margin: auto">
                        <h5>CHƯƠNG TRÌNH ỮU ĐÃI</h5>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid amet consequatur dicta, dignissimos doloribus est harum !</p>
                        <a href="">XEM CHI TIẾT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section" id="section3">
        <video id="myVideo" loop data-autoplay controls>
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

    <div class="section" id="section4">
        <div class="intro">
            <h1>Scroll Down</h1>
            <p>And it will loop to the first section</p>
        </div>
    </div>

    {{--phần slider thông tin công ty--}}
    <div class="section" id="section5">

        <div class="container">
            <div class="row">
                <div id="about_comp2" class="col-md-12 text-center animated fadeInDown">
                    <div>
                        <img src="http://sky89.vn/pictures/catalog/contact/angia_logo.svg" alt=""
                             style="width: 30%;height: auto">
                        <img src="http://sky89.vn/pictures/catalog/contact/coteccons_logo.svg" alt=""
                             style="width: 20%;height: auto">
                    </div>
                    <img src="http://sky89.vn/pictures/catalog/contact/distribution_logo.svg" alt=""
                         style="width: 50%;height: auto">
                </div>
                <div id="about_comp" class="col-md-12 text-center text-white pb-5">
                    <h5>TẬP ĐOÀN VẠN AN PHÁT</h5>
                    <p>160 Võ Thị Sáu, P6, Q3, TP HCM <br>
                        Điện Thoại: 0909 09 09 09 Email:Info@vananphat.com.vn</p>
                </div>
            </div>
        </div>

    </div>


</div>

@section('script')

    <script>

    </script>

@stop