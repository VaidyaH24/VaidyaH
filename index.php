<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link rel="icon" type="image/x-icon" href="images\logo v.png">
        <link rel="stylesheet" href="css\index.css">
    </head>
    <body>
        <header id="header">
            <nav>
                <label class="navbar">VaidyaH</label>
                <div id="clock"></div>
                <script type="text/javascript">
                    setInterval(displayclock, 500)
                    function displayclock () {
                        var time = new Date();
                        var hrs = time.getHours();
                        var min = time.getMinutes();
                        var sec = time.getSeconds();
                        var en = 'AM';

                        if (hrs > 12) {
                            en = 'PM';
                        }

                        if (hrs > 12) {
                            hrs = hrs - 12;
                        }

                        if (hrs == 0) {
                            hrs =hrs - 12;
                        }
                        if (hrs < 10) {
                            hrs = '0' + hrs;
                        }
                        if (min < 10) {
                            min = '0' + min;
                        }
                        if (sec < 10) {
                            sec = '0' + sec;
                        }



                        document.getElementById('clock').innerHTML = hrs + ':' + min +':' + sec + ' ' + en;
                    }
                </script>
                <ul1 class="navigation">
                    <li1><a href=""><button class="logout_btn">Log Out</button></a></li1>
                </ul1>    
            </nav>
            <div class="main">
                <div class="logo">
                    <img src="images\logo v.png">
                </div>
                <ul2>
                    <li2><a href="">home</a></li2>
                    <li2><a href="">department</a></li2>
                    <li2><a href="">services</a></li2>
                    <li2><a href="">about us</a></li2>
                    <li2><a href="">contact us</a></li2>
                </ul2>
            </div>  
            <section>
                <h1>Welcome : <span>abc@gmail.com</span></h1>
            </section>
        </header>
    </body>
</html>