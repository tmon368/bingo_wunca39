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
    <style>
        body{
            font-family: 'Lobster', cursive !important;
        }
    </style>
    <title>Bingo Round</title>

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
            height: 95vh;
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

        .mr-10{
            margin-right: 10px;
        }
        .mg-10{
            margin: 10px;
        }
        .f-53{
            font-size: 53px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="bg-white scroll">
                    <div class="float-right round">round <span id="b-round">#</span></div>
                    <div class="float-left">
                        <img src="https://wunca.uni.net.th/wunca39/wp-content/uploads/2019/03/WUNCA-39th_png-ok-copy.png" class="logo"/>
                    </div>
                    <div class="text-center padding-45"> 
                    <span class="violet">Bin</span><span class="orange">go</span>
                    </div>
                    <br>
                    <div class="row justify-content-end mr-10">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="bingo number">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i> add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2 padding-b-40"><span class="ball">1</span></div>
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
                        <div class="col-md-2 padding-b-40"><span class="last-ball">23</span></div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="bg-white scroll">
                    <div class="text-center">
                        <span class="violet">Bingo</span><span class="orange"> Round</span>
                    </div>
                    <div class="row mg-10">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="bingo number">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">
                                        <i class="fa fa-plus-square" aria-hidden="true"></i> add
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mg-10">
                        <div class="col">
                            <span class="f-53">
                                <span>round</span><br>
                                <span class="violet">#</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>