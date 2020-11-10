<!DOCTYPE html>
<html lang="en">
<head>
<!-- Links  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='./View/Public/Styles/custom-styles.css'>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
<!-- Links -->

<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Scripts -->

<!-- meta tags  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- meta tags -->

    <title>Bubble Blower</title>

</head>
<body>

<!-- Web Grid -->

    <div class='web-grid'>

                       
        <!-- Left Side -->

            <?php
                include './View/power-ups.php';
            ?>

        <!-- Left Side -->

        <!-- Center  -->
            <div class='bubble-pics' style='background-image: url(./View/Public/Images/Bubble.gif);'>
                <h1>Bubble Blower</h1>
                <img  id='bubble-size' class='bubble-png' src='./View/Public/Images/Bubble.png'>
            </div>
        <!-- Center  -->

        <!-- Introduction -->
           
        <!-- Introduction onClick='bubbleClicker()' -->

        <!-- Class Scoreboard -->
            <div class='scoreboard'>
                <!-- Bubble Intro -->
                <div class=''>
                    
                </div>
                <!-- Bubble Intro -->
            </div>
        <!-- Class Scoreboard -->
    </div>  
</div>

<!-- This is where the broked code is -->
<button onclick="alertCookie()">Show cookies</button>
<button onclick="setCookie()">Save Time</button>
    <script>
        function setCookie()  //To add: Make the save name an enterable name which saves the cookie different based on name (will save multiple cookies)
        {
            var d = new Date();
            var TimeSaved = new Date(); //Saves the current time
            d.setTime(d.getTime() + (30*24*60*60*1000)); 
            var expires = "expires="+ d.toUTCString();//sets the expiration a month from current time
            document.cookie = " SaveTime=" + TimeSaved +"; " + expires + ";path=/";
            //document.cookie = "username=John Smith; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/"; // EXAMPLE COOKIE
        }
            //the goal the newbubbles function is to calculate the new bubbles based off of the current Bubbles per second
        function NewBubbles() 
        {
            var CurrentTime = new Date();


        }
            function alertCookie() 
            {
              alert(document.cookie);
            }


    
        // var myVar = null;
        // img = document.getElementById("bubble-size"); 

        // function bubbleClicker()
        // {
        //     img.classList.remove("clickClass");
        //     img.classList.add("clickClass");
        // } 

        // function myStopFunction() 
        // {
        //     clearInterval(myVar);
        // }

        // img = document.getElementById("bubble-size"); 

        // function bubbleClicker()
        // {
        //   img.style.transition = "all 1s";
        //   img.style.width = "41px";
        //   img.style.width = "40px";
        // }

        
    </script>
<!-- Web Grid -->
</body>
</html>