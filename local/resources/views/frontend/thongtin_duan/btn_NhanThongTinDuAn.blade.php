<style>
    div#btn-NhanThongTinDuAn {
        width: 0%;
        height: 100%;
        background-color: rgba(1, 37, 53, 0.9);
        position: absolute;
        top: 0;
        right: 0;
        z-index: 11;
        transition: 0.6s;
        opacity: 0;
    }

    .nhan-tt-duan-box {
        width: 60%;
        height: fit-content;
        margin: 10% 20%;
        z-index: 22;
        /*background-color: #fff;*/
    }

    .nhan-tt-duan-box h5 {
        font-size: 38px;
        margin: auto;
        /*background-color: #fff;*/
    }

    .tat-goithongtin {
        position: fixed;
        transition: 1s;
        color: white;
        z-index: 20;
        font-size: 30px;
        top: 5%;
        right: 20%;
        display: none;
    }

    .tat-goithongtin a {
        color: white;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: black;
        opacity: 0.8; /* Firefox */
    }

    .tat-goithongtin span {
        font-size: 15px;
        color: white;
        padding-right: 10px;
    }

    .tat-goithongtin:hover a {
        transform: rotate(360deg);
        text-decoration: none;
        color: white;
    }

    .ttda_input {
        width: 45%;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        border: 3px solid rgba(00, 00, 00, 0.3);
        margin-bottom: 5px;
    }

    .ttda_input:focus {
        background-color: rgba(255, 255, 255, 1);
    }

    .btn_ttda_input-border {
        border: 1px solid rgba(255, 255, 255, 0.8);
        padding: 8px;
        cursor: pointer;
        box-sizing: border-box;
        transition: .3s;
        width: fit-content;
        margin: auto;
    }

    .btn_ttda_input-border:hover {
        border: 5px solid rgba(255, 255, 255, 0.8);
        padding: 4px;
    }

    .btn_ttda_input {
        font-weight: 600;
        font-size: 16px;
        color: #204a01;
        font-weight: 600;
        background-color: rgba(255, 255, 255, 0.8);
        border: none;
        padding: 8px 13px;
        cursor: pointer;
        transition: .3s;
    }

    .btn_ttda_input:hover {
        color: white;
        background-color: #f3ca0d;
    }

</style>

<div id="btn-NhanThongTinDuAn">
    <div class="tat-goithongtin"><span>Close</span>
        <a href="javascript:void(0)"><i class="far fa-times-circle"></i>
        </a>
    </div>
    <div class="nhan-tt-duan-box position-relative text-center">
        <H5 id="h5-danBox" class="text-white">NHẬN THÔNG TIN DỰ ÁN</H5>
        <form action="/action_page.php">

            <input class="ttda_input" type="text" name="fname" placeholder="Họ và tên (*)">
            <input class="ttda_input" type="text" name="lname" placeholder="Email (*)">
            <br>
            <input class="ttda_input" type="text" name="phone" placeholder="Điện thoại (*)">
            <select class="ttda_input" style="padding: 11px 10px">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <br>
            <textarea class="ttda_input mr-1" name="" id="" cols="30" rows="4" placeholder="Nội dung...."
                      style="width: 90.8%"></textarea>

            <div class="btn_ttda_input-border">
                <input class="btn_ttda_input" type="submit" value="GỬI THÔNG TIN">
            </div>
        </form>

    </div>


</div>

@section('script')

    <script>

        $('.tat-goithongtin').click(function () {
            $('#btn-NhanThongTinDuAn').css({'width': '0%', 'opacity': '0'});
            $('.tat-goithongtin').css('display', 'none');
            $('#h5-danBox').css('opacity', '0')
            $('#h5-danBox').removeClass(' ' + 'animated fadeInDown delay-1s')
            $('.ttda_input').removeClass(' ' + 'animated fadeInDown delay-1s')
            $('.btn_ttda_input-border').removeClass(' ' + 'animated fadeInDown delay-1s')

        })

        $('#btn_nhantt').click(function () {
            $('.ttda_input').addClass(' ' + 'animated fadeInDown delay-1s')
            $('.btn_ttda_input-border').addClass(' ' + 'animated fadeInDown delay-1s')
            $('#btn-NhanThongTinDuAn').css({'width': '100%', 'opacity': '1'});
            $('.tat-goithongtin').css('display', 'block');
            $('#h5-danBox').addClass(' ' + 'animated fadeInDown delay-1s')
            $('#h5-danBox').css('opacity', '1')
        });


    </script>

@stop