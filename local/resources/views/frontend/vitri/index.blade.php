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
            width: 238px;
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

        div#section0 a {
            border: 1px solid white;
            color: white;
            font-size: 13px;
            padding: 8px 10px;
            background-color: rgba(32, 57, 2, 0.9);
            font-weight: 600;
            transition: .3s;
            text-shadow: 1px 1px 1px #012392;
        }

        div#section0 a:hover {
            text-decoration: none;
            color: white;
            background-color: #f3ca0d;
            border: 1px solid #f3ca0d;
        }

        div#trang_dau {
            height: 100vh;
            width: 26%;
            {{--background-image: url({{URL::asset('imgs/bg/bg2.jpg')}});--}}
            {{---webkit-background-size: cover;--}}
            {{--background-size: cover;--}}
            {{--background-position: center center;--}}
            background-color: #003d26;
            transition: .3s;
            opacity: 1;

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

        div#img_vitri{
            position: absolute;
            height: 100vh;
            top: 0;
            right: 0;
            width: 75%;
            /*background-image: url();*/
            /*-webkit-background-size: 100% 100%;*/
            /*background-size: 100% 100%;*/
            /*background-repeat: no-repeat;*/
            overflow: hidden;
            /*transition: .3s;*/
            /*background-color: #003d26;*/
        }
        .img-vitri-overlay{
            transition: .1s;
        }

        div#img_vitri:hover .img-vitri-overlay{
         /*transform: scale(1.3);*/
        }

        .logo-duan{
            height: 86px;
            width: 86px;
            border-radius: 50%;
            position: absolute;
            top: 43%;
            right: 30%;
            border: 5px solid rgba(255,255,255,0.6);
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


    </style>
    <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Saira+Extra+Condensed" rel="stylesheet">


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
                    <li id="menu-01"><a  href="{{URL::asset('/')}}">TRANG CHỦ</a></li>
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

            </div>
            <div id="img_vitri" class="text-warning">
                <div id="elem" class="img-vitri-overlay" style="width: 100%;height: 100%;overflow: hidden;background-color:transparent;" class="position-relative">
                    <img  src="{{URL::asset('imgs/tienich-vitri/vitri.png')}}" alt="" style="width: 100%;height: 100%">
                    <img src="{{URL::asset('imgs/logo/logo1.png')}}" alt="" style="" class="animated fadeInDownBig logo-duan">

                    <a href="javascript:void(0)">+</a>
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
        });

        $(".fa-times").click(function () {
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
        var s=1;

        $('#elem').on('DOMMouseScroll mousewheel', function (e) {

            if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0) { //alternative options for wheelData: wheelDeltaX & wheelDeltaY
                //scroll down
                if(s>1){
                s=s-0.1;
                $('#elem').css('transform','scale('+s+')')
                }

            } else {
                //scroll up
                if(s<1.7) {
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