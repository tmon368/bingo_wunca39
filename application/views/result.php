<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <style>
        body{
            font-family: 'Lobster', cursive !important;
        }
    </style>
    <title>Bingo Award</title>

    <style>

        html {
            background-color: #2f1049;
        }

        body {
            font-family: "Poppins", sans-serif;
            height: 100vh;
            background-color: #2f1049;
            overflow: hidden;
        }
        .bg-white{
            background-color: white;
            margin: 15px 0px 0px 0px;
            border-radius: 10px;
            height: 98vh;
        }

        .h-95vh{
            max-height: 880px;
        }

        .h-50vh{
            max-height: 66vh;
        }

        .h-250{
            max-height: 180px;
        }

        .violet{
            font-size: 50px;
            color: #2f1049;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.27);
        }

        .orange{
            font-size: 50px;
            color: orange;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.27);
        }

        .round{
            color: orange;
            background-color: #2f1049;
            font-size: 30px;
            padding: 2px 15px 2px 15px;
            border-radius: 20px;
            margin: 10px 10px 0px 0px;
            -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            -moz-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
        }

        .padding-45{
            padding-left: 60px;
        }

        .ball{
            width: 60%;
            height: 75px;
            background-color: hsl(0, 80%, 50%);
            border-radius: 10px;
            display: inline-block;
            padding-top: 12px;
            color: antiquewhite;
            font-size: 35px;
            font-weight: 900;
            -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            -moz-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
        }

        .padding-b-40{
            padding-bottom: 40px;
        }

        .scroll{
            overflow-y: auto;
            overflow-x: hidden;
        }

        .logo{
            width: 150px;
            padding: 10px;
        }

        .last-ball{
            width: 60%;
            height: 75px;
            background-color: hsl(39, 100%, 50%);
            border-radius: 10px;
            display: inline-block;
            padding-top: 12px;
            color: antiquewhite;
            font-size: 35px;
            font-weight: 900;
            -webkit-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            -moz-box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
            box-shadow: 5px 5px 5px 0px rgba(0, 0, 0, 0.27);
        }

        thead > tr {
            text-align: center;
        }

        .w-10p{
            width: 10%;
        }

        .r-number{
            font-size: 100px;
        }

        .pt-45{
            padding-top: 45px;
        }

        .padt-5{
            padding-top: 8px;
        }

        .clear{
            margin-top: -15px;
            cursor: pointer;
        }

    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="bg-white scroll h-95vh">
                    <div class="float-right round">round <span id="b-round">#</span></div>
                    <div class="float-left">
                        <img src="https://wunca.uni.net.th/wunca39/wp-content/uploads/2019/03/WUNCA-39th_png-ok-copy.png" class="logo"/>
                    </div>
                    <div class="text-center padding-45"> 
                    <span class="violet">Bin</span><span class="orange">go</span>
                    </div>
                    <br>
                    <div class="row text-center" id="bingoNumber">
                        <!-- <div class="col-md-2 padding-b-40"><span class="ball">1</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">2</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">3</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">4</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">5</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">6</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">7</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">8</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">9</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">10</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">11</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">11</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">12</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">13</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">14</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">15</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">16</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">17</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">18</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">19</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">20</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">21</span></div>
                        <div class="col-md-2 padding-b-40"><span class="ball">22</span></div>
                        <div class="col-md-2 padding-b-40"><span class="last-ball">23</span></div> -->
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-white h-250">
                    <div class="row text-center">
                        <div class="col-7 padt-5">
                            <span class="r-number violet">
                                #
                            </span>
                            <h5 class="clear"><u><span onclick="fnclear()">Clear</span></u></h5>
                        </div>
                        <div class="col-4 pt-45">
                            <button type="button" class="btn btn-warning btn-lg btn-block" onclick="random()">
                                <i class="fa fa-plus-square" aria-hidden="true"></i> <br>
                                Click
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white scroll h-50vh">
                    <div class="text-center">
                        <span class="violet">Bingo</span><span class="orange"> Award</span>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ลำดับ</th>
                                        <th scope="col">รหัส</th>
                                        <th scope="col">ชื่อ</th>
                                    </tr>
                                </thead>
                                <tbody id="bingoResult">
                                    <!-- <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td class="text-center">w0001</td>
                                        <td>demo demo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"  class="text-center">2</th>
                                        <td class="text-center">w0002</td>
                                        <td>demo demo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"  class="text-center">3</th>
                                        <td class="text-center">w0003</td>
                                        <td>demo demo</td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    
    <script>
        var bingoNumber = $("#bingoNumber");
        var b_round = $("#b-round");
        var bingoResult = $("#bingoResult");
        var base_url = "<?php echo base_url() ?>/api/";
        var r_number = $(".r-number");
        var items = [];
        var base_url = "<?php echo base_url() ?>/api/";

        function pushNumber(number){
            $.post(base_url+"/addnumber", {
                "number": number
            },function (data, textStatus, jqXHR) {
                var json_data = JSON.parse(data);
                if(json_data.status){
                    localStorage.setItem("balls", JSON.stringify(items));
                    getResultShow();
                }
            });
        }
        
        function fnclear(){
            $.confirm({
                title: 'คำเตือน!',
                content: 'คุณต้องการล้างข้อมูลใช่หรือไม่',
                type: 'red',
                buttons: {
                    ok: {
                        text: 'ตกลง', // With spaces and symbols
                        action: function () {
                            initBallBingo();
                        }
                    },
                    cancle: {
                        text: 'ยกเลิก'
                    }
                }
            });
        }

        function initBallBingo(){
            items = [];
            var i = 1;
            var end = 75;
            for(i=1;i<=end;i++){
                items.push(i);
            }
            localStorage.setItem("init_ball", JSON.stringify(items));
            localStorage.setItem("balls", JSON.stringify(items));
            r_number.html("#");
        }

        function removeBallBingo(number){
            if(items.length == 0){
                alert("หมดแล้ว");
            }
            for( var i = 0; i < items.length; i++){ 
                if ( items[i] === number) {
                    items.splice(i, 1); 
                }
            }

            pushNumber(number);
        }

        function random(){
            var item = items[Math.floor(Math.random()*items.length)];
            r_number.html(item);
            removeBallBingo(item)
            console.log(items);
        }

        function renderBingoNumber(arrBingoNumber){
            var length = arrBingoNumber.length;
            var html = "";
            $.each(arrBingoNumber, function (i, v) {
                if(i == length-1){
                    html += '<div class="padding-b-40 w-10p"><span class="last-ball">'+v+'</span></div>';
                }else{
                    html += '<div class="padding-b-40 w-10p"><span class="ball">'+v+'</span></div>';
                }
            });
            bingoNumber.html(html);
        }

        function setRound(round){
            b_round.html(round);
        }

        function renderBingoResult(arrBingoResult){
            var html = "";
            $.each(arrBingoResult, function (i, v) { 
                html += '<tr>'
                            +'<th scope="row" class="text-center">'+(i+1)+'</th>'
                            +'<td class="text-center">'+v.code_id+'</td>'
                            +'<td>'+v.fname+'</td>'
                        +'</tr>';
            });
            bingoResult.html(html);
        }

        function getResultShow(){
            $.get(base_url+"/getresultshow",
                function (data, textStatus, jqXHR) {
                    var json_data = JSON.parse(data);
                    console.log(json_data);
                    setRound(json_data.round);
                    renderBingoNumber(json_data.resultnumber);
                    renderBingoResult(json_data.resultbingo);
                }
            );
        }

        $(document).ready(function () {
            getResultShow();
            var oldBallBingo = JSON.parse(localStorage.getItem("balls"));
            console.log(oldBallBingo);
            if(oldBallBingo != null){
                items = oldBallBingo;
            }else{
                initBallBingo();
            }
            setInterval(function(){ getResultShow(); }, 5000);
        });
    </script>
</body>
</html>