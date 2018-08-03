@extends('frontend.master')
@section('style-add')
@stop
@section('bodycontent')

    @include('frontend.thongtin_duan.btn_NhanThongTinDuAn')
    @include('frontend.thongtin_duan.slider-thongtin')


@section('script-private')

    <script type="text/javascript" src="/seadragon/fullpage/dist/examples.js"></script>

    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage2', {
            anchors: ['firstPage', 'secondPage', '3rdPage','4Page','5Page','EndPage'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true,

            onLeave: function (origin, destination, direction) {
                //it won't scroll if the destination is the 3rd section
                if (destination.index == 2){
                    $('#active3').css('background-color','#0b2e13');
                    $('#active2').css('background-color','#76a603');
                    $('#active1').css('background-color','#76a603');
                    $('#gioi-thieu-du-an p').css('display','none');
                    $('#tt-du-an p').css('display','none');
                    $('#cdt-du-an p').css('display','block');
                    $('#cdt-du-an p').addClass(' '+'animated fadeInRight delay-350ms')
                }
                else if (destination.index == 1) {
                    $('#active3').css('background-color','#76a603');
                    $('#active2').css('background-color','#0b2e13');
                    $('#active1').css('background-color','#76a603');
                    $('#gioi-thieu-du-an p').css('display','none');
                    $('#tt-du-an p').css('display','block');
                    $('#tt-du-an p').addClass(' '+'animated fadeInRight delay-350ms')
                    $('#cdt-du-an p').css('display','none');

                }
                else if (destination.index == 0) {
                    $('#active3').css('background-color','#76a603');
                    $('#active2').css('background-color','#76a603');
                    $('#active1').css('background-color','#0b2e13');
                    $('#gioi-thieu-du-an p').css('display','block');
                    $('#gioi-thieu-du-an p').addClass(' '+'animated fadeInRight delay-350ms')
                    $('#tt-du-an p').css('display','none');
                    $('#cdt-du-an p').css('display','none');

                }

            }

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.fa-play-circle').css('display', 'none')
            //Script hiện bản thoong báo đầu trang page load
            $('.tat-baogia').css('display', 'block')
            $(".ttdan-form").css('height', '100%')

        });


        $(".ttdan-form").click(function () {
            $(".ttdan-form").css('transition-delay', '1s',)
            $(".ttdan-form").css('height', '0',)
            $('.tat-baogia').css('display', 'none')
            $('.img-baogia').css('opacity', '0')
            $('#trang_dau').css('opacity', '1')
            $('#trang_dau').addClass(' ' + 'animated zoomIn slow delay-1s')
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
            $('.menu_r-menu').css('display', 'block')
            var div = $(".menu-content");
            $(".menu-content").animate({right: '-360px', opacity: '0'}, "slow");
            $('.fa-bars').css('display', 'block');
            $('.fa-times').css('display', 'none');
        });

        $('#active1').click(function () {
            $('#active1').css('background-color','#0b2e13');
            $('#active2').css('background-color','#76a603');
            $('#active3').css('background-color','#76a603');
            $('#cdt-du-an p').css('display','none')
            $('#tt-du-an p').css('display','none')
            $('#gioi-thieu-du-an p').css('display','block')
            $('#gioi-thieu-du-an p').addClass(' '+'animated fadeInRight')
        });


    </script>




@endsection

