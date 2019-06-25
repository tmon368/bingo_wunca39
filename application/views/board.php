<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: 'Lobster', cursive !important;
        }
    </style>
    <title>Bingo</title>
    <style>
        table, tr,td {
            border: 1px solid black;
        }
        table {
            width: 100%;
            max-width: 520px;
            background-color: navajowhite;
            color:black;
        }
        td {
            width: 19.00%;
            height: 100%;
            position: relative;
        }
        td:after {
            content: '';
            display: block;
            margin-top: 20%;
        }
        td .content {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: gold;
        }
        .dot {
            width: 60%;
            height: 58px;
            /* background-color: hsl(0, 80%, 50%); */
            border-radius: 50%;
            display: inline-block;
            padding-top: 13px;
            margin-top: 15%;
            /* color: antiquewhite; */
            font-size: 20px;
            font-weight: 900;
            cursor: pointer;
        }

        .bg-red{
             background-color: hsl(0, 80%, 50%);
             color: antiquewhite;
        }

        .black {
            width: 60%;
            height: 58px;
            background-color: rgb(60, 60, 60);
            border-radius: 50%;
            display: inline-block;
            padding-top: 16px;
            margin-top: 15%;
            color: antiquewhite;
            font-size: 15px;
            font-weight: 900;
        }

        .white{
            color:white;
            font-weight: 900;
        }

        .t-border{
            max-width: 550px;
            border: 20px solid #ff000000;
            margin-top: 10px;
            border-bottom: 16px solid #ff000000;
            background-color: red;
            border-radius: 10px;
        }

        @media only screen and (max-width: 360px) {
            .dot {
                height: 30px;
                padding-top: 1px;
            }

            .black {
                height: 30px;
                padding-top: 3px;
            }
        }

        @media (min-width: 361px) and (max-width: 450px) {
            .dot {
                height: 38px;
                padding-top: 5px;
            }

            .black {
                height: 38px;
                padding-top: 5px;
            }
        }

        @media (min-width: 450px) and (max-width: 530px) {
            .dot {
                height: 48px;
                padding-top: 8px;
            }

            .black {
                height: 48px;
                padding-top: 8px;
            }
        }

        .mt{
            margin-top: 5px;
        }

        .padding-45{
            padding-left: 60px;
        }
        
        .round{
            background-color: #ffc107;
            padding: 7px 10px 7px 10px;
            border-radius: 30px;
            font-weight: bold;
            color: black;
        }

        .c-orange{
            color: #ffc107;
        }

        /* --------------------- */
        .pyro > .before, .pyro > .after {
            /* background-color: black; */
            position: absolute;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            box-shadow: -120px -218.66667px blue, 248px -16.66667px #00ff84, 190px 16.33333px #002bff, -113px -308.66667px #ff009d, -109px -287.66667px #ffb300, -50px -313.66667px #ff006e, 226px -31.66667px #ff4000, 180px -351.66667px #ff00d0, -12px -338.66667px #00f6ff, 220px -388.66667px #99ff00, -69px -27.66667px #ff0400, -111px -339.66667px #6200ff, 155px -237.66667px #00ddff, -152px -380.66667px #00ffd0, -50px -37.66667px #00ffdd, -95px -175.66667px #a6ff00, -88px 10.33333px #0d00ff, 112px -309.66667px #005eff, 69px -415.66667px #ff00a6, 168px -100.66667px #ff004c, -244px 24.33333px #ff6600, 97px -325.66667px #ff0066, -211px -182.66667px #00ffa2, 236px -126.66667px #b700ff, 140px -196.66667px #9000ff, 125px -175.66667px #00bbff, 118px -381.66667px #ff002f, 144px -111.66667px #ffae00, 36px -78.66667px #f600ff, -63px -196.66667px #c800ff, -218px -227.66667px #d4ff00, -134px -377.66667px #ea00ff, -36px -412.66667px #ff00d4, 209px -106.66667px #00fff2, 91px -278.66667px #000dff, -22px -191.66667px #9dff00, 139px -392.66667px #a6ff00, 56px -2.66667px #0099ff, -156px -276.66667px #ea00ff, -163px -233.66667px #00fffb, -238px -346.66667px #00ff73, 62px -363.66667px #0088ff, 244px -170.66667px #0062ff, 224px -142.66667px #b300ff, 141px -208.66667px #9000ff, 211px -285.66667px #ff6600, 181px -128.66667px #1e00ff, 90px -123.66667px #c800ff, 189px 70.33333px #00ffc8, -18px -383.66667px #00ff33, 100px -6.66667px #ff008c;
            -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
            animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards; }

            .pyro > .after {
            -moz-animation-delay: 1.25s, 1.25s, 1.25s;
            -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
            -o-animation-delay: 1.25s, 1.25s, 1.25s;
            -ms-animation-delay: 1.25s, 1.25s, 1.25s;
            animation-delay: 1.25s, 1.25s, 1.25s;
            -moz-animation-duration: 1.25s, 1.25s, 6.25s;
            -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
            -o-animation-duration: 1.25s, 1.25s, 6.25s;
            -ms-animation-duration: 1.25s, 1.25s, 6.25s;
            animation-duration: 1.25s, 1.25s, 6.25s; }

            @-webkit-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-moz-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-o-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-ms-keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @keyframes bang {
            from {
                box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
            @-webkit-keyframes gravity {
            to {
                transform: translateY(200px);
                -moz-transform: translateY(200px);
                -webkit-transform: translateY(200px);
                -o-transform: translateY(200px);
                -ms-transform: translateY(200px);
                opacity: 0; } }
            @-moz-keyframes gravity {
            to {
                transform: translateY(200px);
                -moz-transform: translateY(200px);
                -webkit-transform: translateY(200px);
                -o-transform: translateY(200px);
                -ms-transform: translateY(200px);
                opacity: 0; } }
            @-o-keyframes gravity {
            to {
                transform: translateY(200px);
                -moz-transform: translateY(200px);
                -webkit-transform: translateY(200px);
                -o-transform: translateY(200px);
                -ms-transform: translateY(200px);
                opacity: 0; } }
            @-ms-keyframes gravity {
            to {
                transform: translateY(200px);
                -moz-transform: translateY(200px);
                -webkit-transform: translateY(200px);
                -o-transform: translateY(200px);
                -ms-transform: translateY(200px);
                opacity: 0; } }
            @keyframes gravity {
            to {
                transform: translateY(200px);
                -moz-transform: translateY(200px);
                -webkit-transform: translateY(200px);
                -o-transform: translateY(200px);
                -ms-transform: translateY(200px);
                opacity: 0; } }
            @-webkit-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; } }
            @-moz-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; } }
            @-o-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; } }
            @-ms-keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; } }
            @keyframes position {
            0%, 19.9% {
                margin-top: 10%;
                margin-left: 40%; }

            20%, 39.9% {
                margin-top: 40%;
                margin-left: 30%; }

            40%, 59.9% {
                margin-top: 20%;
                margin-left: 70%; }

            60%, 79.9% {
                margin-top: 30%;
                margin-left: 20%; }

            80%, 99.9% {
                margin-top: 30%;
                margin-left: 80%; } }

            .bg-fire{
                background-color: #dadada;
            }
            
            .none-event{
                pointer-events: none;
                filter: grayscale(20%);
            }
    </style>
  </head>
  <body>
    <br>
    <div class="" id="fire">
        <div class="before"></div>
        <div class="after"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center" style="text-align: -webkit-center;">
            <div class="col-lg-6">
                <img src="https://wunca.uni.net.th/wunca39/wp-content/uploads/2019/03/WUNCA-39th_png-ok-copy.png" id="icon" alt="User Icon" width="30%" /><br>
                <div class="row mt">
                    <div class="col-lg-9 text-left">สวัสดีคุณ <span id="b-name"></span> รหัสผู้เข้าร่วมงาน <span id="b-code"></span> </div>
                    <div class="col-lg-3"><a href="#" class="c-orange" onclick="logout()">[ออกจากระบบ]</a></div>
                </div>
                <div class="t-border">
                    <div class="float-right round">round <span id="b-round">#</span></div>
                    <h1 class="text-center white padding-45">Bingo</h1>
                    <div class="text-center">
                        <table id="t-board">
                            <tr>
                                <td><span class="dot number-0" data-number="0">1</span></td>
                                <td><span class="dot number-1" data-number="1">2</span></td>
                                <td><span class="dot number-2" data-number="2">3</span></td>
                                <td><span class="dot number-3" data-number="3">4</span></td>
                                <td><span class="dot number-4" data-number="4">5</span></td>
                            </tr>
                            <tr>
                                <td><span class="dot number-5" data-number="5">6</span></td>
                                <td><span class="dot number-6" data-number="6">7</span></td>
                                <td><span class="dot number-7" data-number="7">8</span></td>
                                <td><span class="dot number-8" data-number="8">9</span></td>
                                <td><span class="dot number-9" data-number="9">10</span></td>
                            </tr>
                            <tr>
                                <td><span class="dot number-10" data-number="10">11</span></td>
                                <td><span class="dot number-11" data-number="11">12</span></td>
                                <td><span class="black">free</span></td>
                                <td><span class="dot number-13" data-number="13">14</span></td>
                                <td><span class="dot number-14" data-number="14">15</span></td>
                            </tr>
                            <tr>
                                <td><span class="dot number-15" data-number="15">16</span></td>
                                <td><span class="dot number-16" data-number="16">17</span></td>
                                <td><span class="dot number-17" data-number="17">18</span></td>
                                <td><span class="dot number-18" data-number="18">19</span></td>
                                <td><span class="dot number-19" data-number="19">20</span></td>
                            </tr>
                            <tr>
                                <td><span class="dot number-20" data-number="20">21</span></td>
                                <td><span class="dot number-21" data-number="21">22</span></td>
                                <td><span class="dot number-22" data-number="22">23</span></td>
                                <td><span class="dot number-23" data-number="23">24</span></td>
                                <td><span class="dot number-24" data-number="24">25</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row text-center mt">
                        <div class="col">
                            <button type="button" id="btn-bingo" class="btn btn-warning btn-block" onclick="bingo()">Bingo</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-warning btn-block" onclick="clearBroad()">รอบถัดไป</button>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    
    <script>
        var arrResult = [];
        var base_url = "<?php echo base_url() ?>/api/";

        function logout(){
            $.confirm({
                title: 'ออกจากระบบ',
                content: 'คุณต้องการออกจากระบบใช่หรือไม่',
                buttons: {
                    ok: {
                        text: 'ออกจากระบบ', // With spaces and symbols
                        action: function () {
                            localStorage.removeItem("data");
                            localStorage.removeItem("round");
                            localStorage.removeItem("broad-result");
                            localStorage.removeItem("broad");
                            window.location.href = "bingo";
                        }
                    },
                    cancle: {
                        text: 'ยกเลิก'
                    }
                }
            });
        }

        function createBroad(){
            var tempBroad = JSON.parse(localStorage.getItem("broad"));
            var broad = [];
            if(tempBroad.length > 0){
                $.each(tempBroad, function (i, v) { 
                    if(i != 12){
                        broad.push(v.data);
                    }
                });
                setBroad(broad);
            }else{
                var userData = JSON.parse(localStorage.getItem("data"));
                $.post(base_url+"/getBingoCard", {
                    "userId": userData.userId,
                    "name": userData.name
                },function (data, textStatus, jqXHR) {
                    var json_data = JSON.parse(data);
                    // console.log(json_data);
                    if(json_data.status){
                        localStorage.setItem("round", parseInt(json_data.round));
                        localStorage.setItem("broad-result", JSON.stringify([]));
                        localStorage.setItem("broad", JSON.stringify(json_data.data));
                        if(json_data.data.length > 0){
                            createBroad();
                        }else{
                            alert("โหลดหน้าใหม่อีกครั้ง");
                        }
                    }                    
                });
            }
        }

        function setBroad(broad){
            var index = 0;
            $('table').find('td').each (function(column,td) {
                var number = $(td).find(".dot").text();
                var isNaN = Number.isNaN(parseInt(number));
                if(!isNaN){
                    $(td).find(".dot").text(broad[index++]);
                }
            }); 

            loadRenderBroad();
        }

        function checkUser(userData, round){
            if(!userData){
                window.location.href = "bingo";
            }else{
                $("#b-name").html(userData.name);
                $("#b-code").html(userData.userId);
                $("#b-round").html(round);
            }

            createBroad();
        }

        function loadRenderBroad(){
            var resultBroad = JSON.parse(localStorage.getItem("broad-result"));
            arrResult = resultBroad;
            console.log(resultBroad);
            $.each(resultBroad, function (i, v) { 
                $(".number-"+v).addClass("bg-red");
            });
        }

        function removeRenderBroad(){
            var resultBroad = JSON.parse(localStorage.getItem("broad-result"));
            $.each(resultBroad, function (i, v) { 
                $(".number-"+v).removeClass("bg-red");
            });
            localStorage.setItem("broad-result", JSON.stringify([]));

            loadBingoCard();
        }

        function bingo(){
            // alert("bingo");
            var userData = JSON.parse(localStorage.getItem("data"));
            var round = localStorage.getItem("round");
            var positions = JSON.parse(localStorage.getItem("broad-result"));;

            $.post(base_url+"/checkbingo", {
                "userId": userData.userId,
                "round": round,
                "positions": positions 
            },function (data, textStatus, jqXHR) {
                var json_data = JSON.parse(data);
                var isBingo = json_data.status;
                if(isBingo){
                    $("body").addClass("bg-fire");
                    $("#fire").addClass("pyro");
                    $.confirm({
                        title: 'ยินดีด้วย!',
                        content: 'Bingo!!!',
                        type: 'orange',
                        typeAnimated: true,
                        buttons: {
                            cancle: {
                                text: 'ตกลง',
                                action: function(){
                                    $("#t-board").addClass("none-event");
                                    $("#btn-bingo").addClass("none-event");
                                }
                            }
                        }
                    });
                }else{
                    $.confirm({
                        title: 'คำเตือน!',
                        content: 'โปรดตรวจสอบหมายเลขอีกครั้ง',
                        type: 'orange',
                        typeAnimated: true,
                        buttons: {
                            cancle: {
                                text: 'ตกลง',
                                action: function(){
                                }
                            }
                        }
                    });
                }   
            });
        }

        function clearBroad(){

            $.get(base_url+"/getround",
                function (data, textStatus, jqXHR) {
                    var json_data = JSON.parse(data);
                    var new_round = parseInt(json_data.round); // getNewRound and Broad
                    var round = localStorage.getItem("round");
                    if(new_round > round){
                        // clear broad and set new round
                        $("body").removeClass("bg-fire");
                        localStorage.setItem("round", new_round);
                        var userData = JSON.parse(localStorage.getItem("data"));
                        checkUser(userData, new_round);
                        $("#fire").removeClass("pyro");
                        $("#t-board").removeClass("none-event");
                        $("#btn-bingo").removeClass("none-event");
                        removeRenderBroad();
                    }else{
                        $.confirm({
                            title: 'คำเตือน!',
                            content: 'ขออภัยยังไม่จบรอบที่ '+round,
                            type: 'orange',
                            typeAnimated: true,
                            buttons: {
                                cancle: {
                                    text: 'ตกลง',
                                    action: function(){
                                        $("body").removeClass("bg-fire");
                                        $("#fire").removeClass("pyro");
                                    }
                                }
                            }
                        });
                    }
                }
            );

        }

        function loadBingoCard(){
            // getBingoCard
            var userData = JSON.parse(localStorage.getItem("data"));

            $.post(base_url+"/getBingoCard", {
                "userId": userData.userId,
                "name": userData.name
            },function (data, textStatus, jqXHR) {
                var json_data = JSON.parse(data);
                // console.log(json_data);
                if(json_data.status){
                    localStorage.setItem("round", parseInt(json_data.round));
                    localStorage.setItem("broad-result", JSON.stringify([]));
                    localStorage.setItem("broad", JSON.stringify(json_data.data));
                    createBroad();
                }                    
            });
        }

        $(document).ready(function () {
            var userData = JSON.parse(localStorage.getItem("data"));
            var round = localStorage.getItem("round");
            checkUser(userData, round);
            $(".dot").click(function(){
                var isHasClass = $(this).hasClass("bg-red");   
                if(!isHasClass){
                    var number = $(this).data("number");
                    arrResult.push(parseInt(number));
                    localStorage.setItem("broad-result", JSON.stringify(arrResult));
                    $(this).addClass("bg-red");
                    $("#result").html(arrResult.toString());
                    console.log(arrResult);
                }else{
                    var number = $(this).data("number");
                    arrResult.splice($.inArray(parseInt(number), arrResult),1);
                    localStorage.setItem("broad-result", JSON.stringify(arrResult));
                    $(this).removeClass("bg-red");
                    $("#result").html(arrResult.toString());
                }
            }); 
        });
    </script>
    
</body>
</html>