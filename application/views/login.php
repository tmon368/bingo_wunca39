<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Lobster', cursive !important;
        }
    </style>
    <title>เข้าสู่ระบบ Bingo</title>

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

        a {
            color: #92badd;
            display:inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display:inline-block;
            margin: 40px 8px 10px 8px; 
            color: #cccccc;
        }



        /* STRUCTURE */

        .wrapper {
            display: flex;
            align-items: center;
            flex-direction: column; 
            justify-content: center;
            /* width: 100%; */
            /* min-height: 100%; */
            padding: 20px;
        }

        #formContent {
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: #fff;
            padding: 30px;
            width: 100%;
            max-width: 450px;
            position: relative;
            /* padding: 0px; */
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
        }

        #formFooter {
            background-color: #f6f6f6;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }



        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #2f1049;
        }



        /* FORM TYPOGRAPHY*/

        input[type=button], input[type=submit], input[type=reset]  {
            width:85%;
            background-color: orange;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
            background-color: #f35f22;
        }

        input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #2f1049;
        }

        input[type=text]:placeholder {
        color: #cccccc;
        }



        /* ANIMATIONS */

        /* Simple CSS3 Fade-in-down Animation */
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
            }

            @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        .fadeIn {
            opacity:0;
            -webkit-animation:fadeIn ease-in 1;
            -moz-animation:fadeIn ease-in 1;
            animation:fadeIn ease-in 1;

            -webkit-animation-fill-mode:forwards;
            -moz-animation-fill-mode:forwards;
            animation-fill-mode:forwards;

            -webkit-animation-duration:1s;
            -moz-animation-duration:1s;
            animation-duration:1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }

        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after{
            width: 100%;
        }

        h1{
            color:#2f1049;
        }

        *:focus {
            outline: none;
        } 
        
        .hero {
            /* background-color: #2f1049;
            position: relative;
            height: 100vh; */
            
        }

        .hero__title {
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
                    transform: translate(-50%, -50%);
            font-size: 50px;
            z-index: 1;
        }
        
        /*
        .cube {
            position: absolute;
            top: 80vh;
            left: 45vw;
            width: 10px;
            height: 10px;
            border: solid 1px #dfc5ec;
            -webkit-transform-origin: top left;
                    transform-origin: top left;
            -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                    transform: scale(0) rotate(0deg) translate(-50%, -50%);
            -webkit-animation: cube 12s ease-in forwards infinite;
                    animation: cube 12s ease-in forwards infinite;
        }
        .cube:nth-child(2n) {
            border-color: #fddd9e;
        }
        .cube:nth-child(2) {
            -webkit-animation-delay: 2s;
                    animation-delay: 2s;
            left: 25vw;
            top: 40vh;
        }
        .cube:nth-child(3) {
            -webkit-animation-delay: 4s;
                    animation-delay: 4s;
            left: 75vw;
            top: 50vh;
        }
        .cube:nth-child(4) {
            -webkit-animation-delay: 6s;
                    animation-delay: 6s;
            left: 90vw;
            top: 10vh;
        }
        .cube:nth-child(5) {
            -webkit-animation-delay: 8s;
                    animation-delay: 8s;
            left: 10vw;
            top: 85vh;
        }
        .cube:nth-child(6) {
            -webkit-animation-delay: 10s;
                    animation-delay: 10s;
            left: 50vw;
            top: 10vh;
        }

        @-webkit-keyframes cube {
            from {
                -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                        transform: scale(0) rotate(0deg) translate(-50%, -50%);
                opacity: 1;
            }
            to {
                -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                        transform: scale(20) rotate(960deg) translate(-50%, -50%);
                opacity: 0;
            }
        }

        @keyframes cube {
            from {
                -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                        transform: scale(0) rotate(0deg) translate(-50%, -50%);
                opacity: 1;
            }
            to {
                -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                        transform: scale(20) rotate(960deg) translate(-50%, -50%);
                opacity: 0;
            }
        }*/

        .violet{
            font-size: 50px;
            color: #2f1049;
        }

        .orange{
            font-size: 50px;
            color: orange;
        }
        #icon {
            width:30%;
        }

        #info {
            position: absolute;
            /* left: 10px;
            top: 10px; */
            overflow: hidden;
            /* position: fixed; */
            top: 50%;
            left: 50%;
            /* bring your own prefixes */
            transform: translate(-50%, -50%);
        }

        #info {
            /* background: rgba(0,0,0,0.8); */
            /* padding: 12px 10px; */
            margin-bottom: 1px;
            color: #fff;
        }

        #info h1 {
            line-height: 22px;
            font-weight: 300;
            font-size: 18px;
            margin: 0;
        }

        #info h2 {
            line-height: 14px;
            font-weight: 300;
            font-size: 12px;
            color: rgba(255,255,255,0.8);
            margin: 0 0 6px 0;
        }

        #info a {
            text-transform: uppercase;
            text-decoration: none;
            border-bottom: 1px dotted rgba(255,255,255,0.2);
            margin-right: 4px;
            line-height: 20px;
            font-size: 10px;
            color: rgba(255,255,255,0.5);
        }

        #info a:hover {
            border-bottom: 1px dotted rgba(255,255,255,0.6);
            color: rgba(255,255,255,1.0);
        }
    </style>
  </head>
  <body>

    <div class="hero" id="info"> 
        <!-- <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div> -->
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <br>
                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="https://wunca.uni.net.th/wunca39/wp-content/uploads/2019/03/WUNCA-39th_png-ok-copy.png" id="icon" alt="User Icon" /><br>
                    <span class="violet">Bin</span><span class="orange">go</span>
                </div>
                
                    <!-- Login Form -->
                <form id="login-form">
                    <input type="text" id="login" class="fadeIn second" name="userId" placeholder="รหัสผู้เข้าร่วมงาน">
                    <input type="text" id="name" class="fadeIn second" name="name" placeholder="ชื่อผู้เข้าร่วมงาน">
                    <input type="submit" class="fadeIn fourth" value="เข้าสู่ระบบ">
                </form>
                
                    <!-- Remind Passowrd -->
                <!-- <div id="formFooter"> -->
                    <!-- <a class="underlineHover" href="#">Go to the Site</a> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/public/js/sketch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    
    <script>
        var base_url = "<?php echo base_url()?>/api/";

        $("#login-form").submit(function (e) { 
            e.preventDefault();
            var id = $("#login").val();
            var name = $("#name").val();
            if(id && name){
                getUserDataAndRound(id, name);
            }
        });

        function getUserDataAndRound(userId, name){
            // getBingoCard
            $.post(base_url+"/getBingoCard", {
                "userId": userId,
                "name": name
            },function (data, textStatus, jqXHR) {
                var json_data = JSON.parse(data);
                // console.log(json_data);
                if(json_data.status){
                    localStorage.setItem("data", JSON.stringify({
                        userId: userId,
                        name: name
                    }));

                    localStorage.setItem("round", parseInt(json_data.round));
                    localStorage.setItem("broad-result", JSON.stringify([]));
                    localStorage.setItem("broad", JSON.stringify(json_data.data));
                    window.location.href = "board";
                }                    
            });
        }

        $(document).ready(function () {
            var data = JSON.parse(localStorage.getItem("data"));
            var form = $("#login-form");
            


            if(data){
                window.location.href = "board";
            }
            
            function Particle( x, y, radius ) {
                this.init( x, y, radius );
            }

            Particle.prototype = {

                init: function( x, y, radius ) {

                    this.alive = true;

                    this.radius = radius || 10;
                    this.wander = 0.15;
                    this.theta = random( TWO_PI );
                    this.drag = 0.92;
                    this.color = '#fff';

                    this.x = x || 0.0;
                    this.y = y || 0.0;

                    this.vx = 0.0;
                    this.vy = 0.0;
                },

                move: function() {

                    this.x += this.vx;
                    this.y += this.vy;

                    this.vx *= this.drag;
                    this.vy *= this.drag;

                    this.theta += random( -0.5, 0.5 ) * this.wander;
                    this.vx += sin( this.theta ) * 0.1;
                    this.vy += cos( this.theta ) * 0.1;

                    this.radius *= 0.96;
                    this.alive = this.radius > 0.5;
                },

                draw: function( ctx ) {

                    ctx.beginPath();
                    ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
                    ctx.fillStyle = this.color;
                    ctx.fill();
                }
            };

            // ----------------------------------------
            // Example
            // ----------------------------------------

            var MAX_PARTICLES = 280;
            var COLOURS = [ '#69D2E7', '#A7DBD8', '#E0E4CC', '#F38630', '#FA6900', '#FF4E50', '#F9D423' ];

            var particles = [];
            var pool = [];

            var demo = Sketch.create({
                container: document.getElementById( 'container' )
            });

            demo.setup = function() {

                // Set off some initial particles.
                var i, x, y;

                for ( i = 0; i < 20; i++ ) {
                    x = ( demo.width * 0.5 ) + random( -100, 100 );
                    y = ( demo.height * 0.5 ) + random( -100, 100 );
                    demo.spawn( x, y );
                }
            };

            demo.spawn = function( x, y ) {

                if ( particles.length >= MAX_PARTICLES )
                    pool.push( particles.shift() );

                particle = pool.length ? pool.pop() : new Particle();
                particle.init( x, y, random( 5, 40 ) );

                particle.wander = random( 0.5, 2.0 );
                particle.color = random( COLOURS );
                particle.drag = random( 0.9, 0.99 );

                theta = random( TWO_PI );
                force = random( 2, 8 );

                particle.vx = sin( theta ) * force;
                particle.vy = cos( theta ) * force;

                particles.push( particle );
            }

            demo.update = function() {

                var i, particle;

                for ( i = particles.length - 1; i >= 0; i-- ) {

                    particle = particles[i];

                    if ( particle.alive ) particle.move();
                    else pool.push( particles.splice( i, 1 )[0] );
                }
            };

            demo.draw = function() {

                demo.globalCompositeOperation  = 'lighter';
                
                for ( var i = particles.length - 1; i >= 0; i-- ) {
                    particles[i].draw( demo );
                }
            };

            demo.mousemove = function() {

                var particle, theta, force, touch, max, i, j, n;

                for ( i = 0, n = demo.touches.length; i < n; i++ ) {

                    touch = demo.touches[i], max = random( 1, 4 );
                    for ( j = 0; j < max; j++ ) demo.spawn( touch.x, touch.y );
                }
            };
        });
    </script>
    
</body>
</html>