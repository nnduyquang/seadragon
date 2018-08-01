@extends('frontend.master')
@section('bodycontent')
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
            width: 186px;
            height: auto;
            transition: .3s;
        }

        div.btn-ttdu {
            position: absolute;
            right: 25%;
            bottom: 18px;
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
        {{--background-image: url({{URL::asset('imgs/111a-min_opt.jpg')}});--}}
        {{---webkit-background-size: cover;--}}
        {{--background-size: cover;--}}
        {{--background-position: center center;--}}

        }

        div#section0 h5, div#section0 h6 {
            color: white;
            text-shadow: 1px 1px 8px #0b2e13;
            font-size: 6vw;
            margin: auto;

        }

        div#section0 h6 {
            font-size: 2vw;
            color: white;
        }

        div#section0 h5 {
            text-align: left;
            width: fit-content;
            font-family: 'Asap Condensed', sans-serif;
            position: relative;
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


        div#trang_dau {
            height: 100vh;
            width: 26%;
            background-color: #003d26;
            transition: .3s;
            opacity: 1;
            padding-top: 286px;
            float: left;
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

        #infoMenu li a {
            color: #fff;
        }

        .play-stop-button:hover i {
            color: #ffffff;
            opacity: 1;

        }

        div#img_vitri {
            position: absolute;
            height: 100vh;
            top: 0;
            right: 0;
            width: 75%;
            overflow: hidden;

        }

        div.img-vitri-overlay {
            transition: .1s;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color:transparent;
            -webkit-animation:  example1 1s; /* Safari 4.0 - 8.0 */
            animation: example1 1s;
        }


        .logo-duan {
            height: 86px;
            width: 86px;
            border-radius: 50%;
            position: absolute;
            top: 43%;
            right: 30%;
            border: 5px solid rgba(255, 255, 255, 0.8);
            cursor: pointer;

        }

        div#vitri_duan{
            height: 86px;
            width: 86px;
            border-radius: 50%;
            position: absolute;
            top: 43%;
            right: 30%;
            /*border: 5px solid rgba(255, 255, 255, 0.8);*/
            background-color: transparent;
            -webkit-animation:  example2 1s infinite ; /* Safari 4.0 - 8.0 */
            -webkit-animation-delay: 2s;
            animation: example2 1s infinite;
            animation-delay: 2s;
            cursor: pointer;
        }




        @media screen and (max-width: 999px) and (min-width: 652px) {

            div#trang_dau {
            }

            img.logo {
                width: 168px;
                height: auto;
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



        .vitri-sanbay{
            position: absolute;
            width: 32px;
            height: 32px;
            top: 15%;
            left: 21%;
            border-radius: 50%;
            font-size: 26px;
            background-color: transparent;
            color: white;
            border-radius: 50%;
            background-color: #a94c9d;
            line-height: 26px;
            text-align: center;
            transition: .3s;
            /*animation-name: example;*/
            /*animation-iteration-count: infinite;*/

        }

        a.vitri-sanbay:hover{
            text-decoration: none;
            background-color: #fff;
            color: #0b2e13;
        }


        div#vitri_sanbay{
            position: absolute;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            top: 15%;
            left: 21%;
            box-shadow: 0px 0px 15px 3px white;
            -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
            animation: example 1s infinite;

        }

        .vitri-kcn{
            position: absolute;
            width: 32px;
            height: 32px;
            top: 7%;
            left: 39%;
            border-radius: 50%;
            font-size: 26px;
            background-color: transparent;
            color: white;
            border-radius: 50%;
            background-color: #111c87;
            line-height: 26px;
            text-align: center;
            transition: .3s;
            /*animation-name: example;*/
            /*animation-iteration-count: infinite;*/

        }

        a.vitri-kcn:hover{
            text-decoration: none;
            background-color: #fff;
            color: #0b2e13;
        }

        div#vitri_kcn{
            position: absolute;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            top: 7%;
            left: 39%;
            box-shadow: 0px 0px 15px 3px white;
            -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
            animation: example 1s infinite;

        }


        .vitri-tthc{
            position: absolute;
            width: 32px;
            height: 32px;
            top: 52%;
            left: 47%;
            border-radius: 50%;
            font-size: 26px;
            background-color: transparent;
            color: white;
            border-radius: 50%;
            background-color: #b42e47;
            line-height: 26px;
            text-align: center;
            transition: .3s;
            /*animation-name: example;*/
            /*animation-iteration-count: infinite;*/

        }

        a.vitri-tthc:hover{
            text-decoration: none;
            background-color: #fff;
            color: #0b2e13;
        }

        div#vitri_tthc{
            position: absolute;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            top: 52%;
            left: 47%;
            box-shadow: 0px 0px 15px 3px white;
            -webkit-animation:  example 1s infinite; /* Safari 4.0 - 8.0 */
            animation: example 1s infinite;

        }

        div#img_tthc{
            position: absolute;
            width: 138px;
            height: 138px;
            border-radius: 50%;
            top: 52%;
            left: 28%;
            overflow: hidden;
            opacity: 0;
            transition: .3s;
            border: 3px solid #0b2e13;
        }


        a.vitri-tthc:hover + div#img_tthc{
            opacity: 1;
            transform: scale(1.5);
        }

        div#img_sanbay{
            position: absolute;
            width: 138px;
            height: 138px;
            border-radius: 50%;
            top: 5%;
            left: 3%;
            overflow: hidden;
            opacity: 0;
            transition: .3s;
            border: 3px solid #0b2e13;
        }

        div#img_sanbay img,div#img_kcn img,div#img_tthc img{
            width: 100%;
            height: 100%;
        }

        a.vitri-sanbay:hover + div#img_sanbay{
            opacity: 1;
            transform: scale(1.3);
        }

        div#img_kcn{
            position: absolute;
            width: 138px;
            height: 138px;
            border-radius: 50%;
            top: 5%;
            left: 47%;
            overflow: hidden;
            opacity: 0;
            transition: .3s;
            border: 3px solid #0b2e13;
        }


        a.vitri-kcn:hover + div#img_kcn{
            opacity: 1;
            transform: scale(1.3);
        }



        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes example {
            from {transform: scale(1)}
            to {transform: scale(1.8)}
        }

        /* Standard syntax */
        @keyframes example {
            from {transform: scale(1)}
            to {transform: scale(1.8)}
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes example1 {
            from {transform: scale(1.8)}
            to {transform: scale(1)}
        }

        /* Standard syntax */
        @keyframes example1 {
            from {transform: scale(1.8)}
            to {transform: scale(1)}
        }

        /* Safari 4.0 - 8.0 */
        @-webkit-keyframes example2 {
            from {border: 5px solid rgba(255, 255, 255, 0.8);}
            to {border: 5px solid #0b2e13;}
        }

        /* Standard syntax */
        @keyframes example2 {
            from {border: 5px solid rgba(255, 255, 255, 0.8);}
            to {border: 5px solid #0b2e13;}
        }

        h5.title-vitri{
            color: white;
            position: fixed;
            z-index: 1;
            top: 30px;
            right:73px;
            text-shadow: 1px 1px 5px #0b2e13;
        }


    </style>
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Saira+Extra+Condensed" rel="stylesheet">

    @include('frontend.home.btn_NhanThongTinDuAn')

    <div id="fullpage">
        <div id="menu" class="d-flex justify-content-between align-items-center">

            <img src="{{URL::asset('imgs/logo/logo2.png')}}" alt="" class="logo animated fadeIn slower">

            <div class="active d-flex align-items-center" style="font-size: 14px">
                Copyright © 2018 by <b> &nbsp; Smartlinks</b>.
                <a class="scnw ml-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="scnw ml-3" href=""><i class="fab fa-youtube"></i></a>
            </div>


            <div class="menu-content">
                <ul>
                    <li id="menu-01"><a href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
                    <li id="menu-02" class=""><a href="thong-tin-du-an-sea-dragon.html">GIỚI THIỆU</a></li>
                    <li id="menu-03"><a class="active" href="">VỊ TRÍ</a></li>
                    <li id="menu-04"><a href="">GIÁ CHƯƠNG TRÌNH ƯU ĐÃI</a></li>
                    <li id="menu-05"><a href="">PHÁP LÝ THANH TOÁN</a></li>
                    <li id="menu-06"><a href="">LIÊN HỆ ĐẬT CHỔ</a></li>
                </ul>
            </div>

            {{--<img src="{{URL::asset('imgs/arrow-down.png')}}" alt="" class="animated fadeInDown infinite arrow-down">--}}

            <div class="btn-ttdu">
                <button id="btn_nhantt">NHẬN THÔNG TIN DỰ ÁN</button>
            </div>

            <h5 style=""
                class="animated flipInX slow title-vitri">VỊ TRÍ</h5>
            <div id="menu_r">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
                <p class="menu_r-menu mt-0 pt-0" style="font-size: 14px">
                    menu
                </p>
            </div>

            <div data-menuanchor="3rdPage" class="call-btn d-flex align-items-center">
                <div class="pr-3"><i class="fas fa-phone phone-i"></i></div>
                <span style="font-size: 22px;font-weight: 500" class="phone-num">0909 86 86 86</span>
            </div>
        </div>

        <div class="section position-relative" id="section0">
            <div id="trang_dau" class="text-warning">
                <div class="animated fadeInLeft slow">
                <h5 style="font-size: 33px">VỊ TRÍ ĐỘC TÔN</h5>
                <p class="text-white pr-2">Không gian nghĩ dưỡng - thiên đường du lịch</p>
                </div>
            </div>
            <div id="img_vitri" class="text-warning">
                <div id="elem" class="img-vitri-overlay"
                     style=""
                     class="position-relative">
                    <img src="{{URL::asset('imgs/tienich-vitri/vitri.jpg')}}" alt="" style="width: 100%;height: 100%">

                    <img src="{{URL::asset('imgs/logo/logo1.png')}}" alt="" style=""
                         class="animated bounceInDown delay-1s logo-duan">

                    <div id="vitri_duan">
                    </div>
                    <div id="vitri_sanbay">
                    </div>
                    <a class="vitri-sanbay" href="javascript:void(0)" style="">+</a>
                    <div id="img_sanbay">
                        <img src="{{URL::asset('imgs/tienich-vitri/sblongthanh.jpg')}}" alt="">
                    </div>

                    <div id="vitri_kcn">
                    </div>
                    <a class="vitri-kcn" href="javascript:void(0)" style="">+</a>
                    <div id="img_kcn">
                        <img src="{{URL::asset('imgs/tienich-vitri/kcn.jpg')}}" alt="">
                    </div>

                    <div id="vitri_tthc">
                    </div>
                    <img src="" alt="">
                    <a class="vitri-tthc" href="javascript:void(0)" style="">+</a>

                    <div id="img_tthc">
                        <img src="{{URL::asset('imgs/tienich-vitri/tthc.jpg')}}" alt="">
                    </div>



                </div>
            </div>
        </div>


    </div>



@stop

@section('script-private')
    <script>
        $(document).ready(function () {


        });


        $(".ttdan-form").click(function () {
            $(".ttdan-form").css('transition-delay', '1s',)
            $(".ttdan-form").css('height', '0',)
            $('.tat-baogia').css('display', 'none')
            $('.img-baogia').css('opacity', '0')
            $('#trang_dau').css('opacity', '1')
            $('#trang_dau').addClass(' ' + 'animated zoomIn slow delay-1s')
        })

        //tắt from báo giá đầu trang load vào
        $('.tat-baogia').click(function () {
            $(".ttdan-form").css('transition-delay', '1s',)
            $(".ttdan-form").css('height', '0',)
            $('.tat-baogia').css('display', 'none')
            $('.img-baogia').css('opacity', '0')
        })

        $('.play-stop-button').click(function () {
            if ($('.fa-pause-circle').css('display') == 'none') {
                $('.fa-pause-circle').css('display', 'block')
                $('.fa-play-circle').css('display', 'none')
            } else {
                $('.fa-pause-circle').css('display', 'none')
                $('.fa-play-circle').css('display', 'block')
            }
        })

        //Script load hiện menu là đóng menu
        $(".fa-bars").click(function () {
            $('#menu-01').addClass(' ' + 'animated fadeInRight delay-11s')
            $('#menu-02').addClass(' ' + 'animated fadeInRight delay-12s')
            $('#menu-03').addClass(' ' + 'animated fadeInRight delay-13s')
            $('#menu-04').addClass(' ' + 'animated fadeInRight delay-14s')
            $('#menu-05').addClass(' ' + 'animated fadeInRight delay-15s')
            $('#menu-06').addClass(' ' + 'animated fadeInRight delay-16s')
            $('.call-btn').css('color', '#1e4004')
            $('.phone-i').css('border', '1px solid #1e4004')
            $('.phone-num').css('color', '#1e4004')
            $('.menu_r-menu').css('display', 'none')
            $('#menu_r').css('color', '#1e4004')
            var div = $(".menu-content");
            div.animate({right: '0', opacity: '1'}, "slow");
            $('.fa-bars').css('display', 'none');
            $('.fa-times').css('display', 'block');
            $('h5.title-vitri').css({'opacity':'0','top':'22px'})
        });

        $(".fa-times").click(function () {
            $('h5.title-vitri').css({'opacity':'1'})
            $('#menu-01').removeClass(' ' + 'animated fadeInRight delay-11s')
            $('#menu-02').removeClass(' ' + 'animated fadeInRight delay-12s')
            $('#menu-03').removeClass(' ' + 'animated fadeInRight delay-13s')
            $('#menu-04').removeClass(' ' + 'animated fadeInRight delay-14s')
            $('#menu-05').removeClass(' ' + 'animated fadeInRight delay-15s')
            $('#menu-06').removeClass(' ' + 'animated fadeInRight delay-16s')
            $('.phone-num').css('color', 'white')
            $('.phone-i').css('border', '1px solid white')
            $('.call-btn').css('color', 'white')
            $('.menu_r-menu').css('display', 'block')
            $('#menu_r').css('color', 'white')
            var div = $(".menu-content");
            $(".menu-content").animate({right: '-260px', opacity: '0'}, "slow");
            $('.fa-bars').css('display', 'block');
            $('.fa-times').css('display', 'none');
        });


    </script>

    {{--script choh full page load và các hiệu ứng lên và xuống--}}
    <script type="text/javascript">
        var s = 1;

        $('#elem').on('DOMMouseScroll mousewheel', function (e) {

            if (e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
                //scroll down
                if (s > 1) {
                    s = s - 0.1;
                    $('#elem').css('transform', 'scale(' + s + ')')
                }

            } else {
                //scroll up
                if (s < 1.7) {
                    s = s + 0.1;
                    $('#elem').css('transform', 'scale(' + s + ')')
                }
            }
            //prevent page fom scrolling
            return false;
        });

        var myFullpage = new fullpage('#fullpage', {
            // anchors: ['firstPage', 'secondPage', '3rdPage','4Page','5Page','EndPage'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true,
        });
    </script>
@stop