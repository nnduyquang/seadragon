@extends('frontend.master')
@section('style-add')
    <link rel="stylesheet" type="text/css" href="/seadragon/fullpage/dist/examples.css" />
@stop
@section('bodycontent')

    <ul id="menu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First slide</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
        <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
    </ul>

    <div id="fullpage">
        <div class="section " id="section0">
            <h1>fullPage.js</h1>
            <p>Looping Top and Bottom Enabled</p>
            <img src="imgs/fullPage.png" alt="fullPage"/>
        </div>
        <div class="section" id="section1">
            <div class="intro">
                <h1>Looping!</h1>
                <p>Go to the first section and scroll up or to the last one and scroll down to see how it works.</p>
            </div>
        </div>
        <div class="section" id="section2">
            <div class="intro">
                <h1>Scroll Down</h1>
                <p>And it will loop to the first section</p>
            </div>
        </div>
    </div>




@stop
@section('script-private')
    <script type="text/javascript">
        var myFullpage = new fullpage('#fullpage', {
            sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
            anchors: ['firstPage', 'secondPage', '3rdPage'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true
        });
    </script>
@stop
