@extends('frontend.master')

@section('bodycontent')

    @include('frontend.home.btn_NhanThongTinDuAn')
    @include('frontend.home.fullslider')

@stop
@section('script-private')
    <script>
        $(document).ready(function () {
            
            $('.fa-play-circle').css('display','none')
            //Script hiện bản thoong báo đầu trang page load
            $('.tat-baogia').css('display','block')
            $(".ttdan-form").css('height','100%')

        });

        var myVideo = document.getElementById("myVideo");

        function playPause() {
            if (myVideo.paused)
                myVideo.play();
            else
                myVideo.pause();
        }


        $(".ttdan-form").click(function () {
            $(".ttdan-form").css('transition-delay','1s',)
            $(".ttdan-form").css('height','0',)
            $('.tat-baogia').css('display','none')
            $('.img-baogia').css('opacity','0')
            $('#trang_dau').css('opacity','1')
            $('#trang_dau').addClass(' '+'animated zoomIn slow delay-1s')
        })

        //tắt from báo giá đầu trang load vào
        $('.tat-baogia').click(function () {
            $(".ttdan-form").css('transition-delay','1s',)
            $(".ttdan-form").css('height','0',)
            $('.tat-baogia').css('display','none')
            $('.img-baogia').css('opacity','0')
        })

        $('.play-stop-button').click(function () {
            if($('.fa-pause-circle').css('display')=='none'){
                $('.fa-pause-circle').css('display','block')
                $('.fa-play-circle').css('display','none')
            }else{
                $('.fa-pause-circle').css('display','none')
                $('.fa-play-circle').css('display','block')
            }
        })

        //Script load hiện menu là đóng menu
        $(".fa-bars").click(function () {
            $('#menu-01').addClass(' '+'animated fadeInRight delay-300ms')
            $('#menu-02').addClass(' '+'animated fadeInRight delay-350ms')
            $('#menu-03').addClass(' '+'animated fadeInRight delay-400ms')
            $('#menu-04').addClass(' '+'animated fadeInRight delay-450ms')
            $('#menu-05').addClass(' '+'animated fadeInRight delay-500ms')
            $('#menu-06').addClass(' '+'animated fadeInRight delay-550ms')
            $('.call-btn').css('color','#1e4004')
            $('.phone-i').css('border','1px solid #1e4004')
            $('.phone-num').css('color','#1e4004')
            $('.menu_r-menu').css('display','none')
            $('#menu_r').css('color','#1e4004')
            var div = $(".menu-content");
            div.animate({right: '0', opacity: '1'}, "slow");
            $('.fa-bars').css('display', 'none');
            $('.fa-times').css('display', 'block');
        });

        $(".fa-times").click(function () {
            $('#menu-01').removeClass(' '+'animated fadeInRight delay-300ms')
            $('#menu-02').removeClass(' '+'animated fadeInRight delay-350ms')
            $('#menu-03').removeClass(' '+'animated fadeInRight delay-400ms')
            $('#menu-04').removeClass(' '+'animated fadeInRight delay-450ms')
            $('#menu-05').removeClass(' '+'animated fadeInRight delay-500ms')
            $('#menu-06').removeClass(' '+'animated fadeInRight delay-550ms')
            $('.phone-num').css('color','white')
            $('.phone-i').css('border','1px solid white')
            $('.call-btn').css('color','white')
            $('.menu_r-menu').css('display','block')
            $('#menu_r').css('color','white')
            var div = $(".menu-content");
            $(".menu-content").animate({right: '-260px', opacity: '0'}, "slow");
            $('.fa-bars').css('display', 'block');
            $('.fa-times').css('display', 'none');
        });


    </script>

    {{--script choh full page load và các hiệu ứng lên và xuống--}}
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            // anchors: ['firstPage', 'secondPage', '3rdPage','4Page','5Page','EndPage'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true,

            onLeave: function (origin, destination, direction) {
                //it won't scroll if the destination is the 3rd section
                if ((origin.index == 0) && direction == 'down')  {
                    $('#trang_dau').css('opacity','0')
                    $('#trang_dau').removeClass(' '+'animated zoomIn slow delay-1s')
                    $("#section2-slide2").addClass(" " + "animated fadeInRight arrow-down text-white");
                    $("#section3-slide").removeClass(" " + "animated fadeInUp arrow-down slow text-white");
                }else if(origin.index == 2 && direction == 'up'){
                    $("#section2-slide2").addClass(" " + "animated fadeInRight arrow-down");
                    $("#section3-slide").removeClass(" " + "animated fadeInUp arrow-down slow");
                }
                else if (origin.index == 1 && direction == 'up') {
                    $('#trang_dau').css('opacity','1')
                    $('#trang_dau').addClass(' '+'animated zoomIn slow')
                    $("#section2-slide2").removeClass(" " + "animated fadeInRight arrow-down");
                } else if ((origin.index == 1) && direction == 'down') {
                    $("#section3-slide").addClass(" " + "animated fadeInUp arrow-down slow text-white");
                    $("#section2-slide2").removeClass(" " + "animated fadeInRight arrow-down");
                } else if( ((origin.index == 3) && direction == 'down')||((origin.index == 0) && direction == 'up')) {
                    $("#about_comp").addClass(" "+"animated fadeInDown slow delay-1s");
                    // $("#section2-slide2").removeClass(" " + "animated zoomIn arrow-down slow");
                    $("#about_comp2").addClass(" "+"animated fadeInUp slow delay-2s");
                    $('#trang_dau').css('opacity','0')
                    $('#trang_dau').removeClass(' '+'animated zoomIn slow delay-1s')
                }
                else if (((origin.index == 4) && direction == 'down')||((origin.index == 4) && direction == 'up')) {
                    $("#about_comp").removeClass(" "+"animated fadeInDown slow delay-1s");
                    // $("#section2-slide2").removeClass(" " + "animated zoomIn arrow-down slow");
                    $("#about_comp2").removeClass(" "+"animated fadeInUp slow delay-2s");
                    $('#trang_dau').css('opacity','1')
                    $('#trang_dau').addClass(' '+'animated zoomIn slow')
                }
            }

        });
    </script>

@stop