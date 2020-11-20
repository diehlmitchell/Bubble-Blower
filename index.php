<!DOCTYPE html>
<html lang="en">
<head>
<!-- Links  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='./View/Public/Styles/custom-styles.css'>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet"> 
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
                <h1 class="change-name" data-toggle="modal" data-target="#myModal"><span class='hover-span' id="change">Bubble Blower</span><img src='./View/Public/Images/pencil.png' class="pencil"></h1>
                <img onClick="Count()" class='bubble-png' src='./View/Public/Images/Bubble.png'>
            </div>
        <!-- Center  -->
           

        <!-- Scoreboard (Right Side) -->
            <div class='score-board-grid'>

                <?php
                    include './View/score-board.php';
                ?>

                <p onClick="myJsFunction()" id="input1">Bubble Blower Score: <span id="output"> 0</span></p>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
  
                        <!-- Modal content-->
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" style='color: red;'>&times;</button>
                            </div>
                                <!-- This is later referanced by the function nameChanger() -->
                            <div class="modal-body"> 
                                <label for="name">What should your bubble blower name be?</label>
                                <input type="text" id="name" name="name" value="">
                            </div>

                            <div class="modal-footer">
                                <button onClick="nameChanger()" class='btn btn-primary' data-dismiss="modal" 
                                style='background-color: white; color: black;'>Enter</button>

                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


        <!-- Scoreboard (Right Side) -->

        <!-- This is where the broked code is -->
        <!-- <button onclick="alertCookie()">Show cookies</button>
        <button onclick="setCookie()">Save Time</button> -->

        <!-- <script>
        function setCookie()  -->
                <button onclick="print_cookies()">Place Holder</button>
                <button onclick="setCookie()">Save Time</button>
                <button onclick="minusDates(daCookies)">Calculate Difference</button>
                <button onclick="extractCookies()">daCookies output</button>

                <!-- <button onclick="getCookie()">get cookie</button> -->
            </div>

<!-- This is where the broked code is -->

    <script>
        var SaveNum = 0;//TEMPorary, WILL CHANGE TO A DIFFERENT SAVE NAME SCHEME LATER
        function setCookie()  //To add: Make the save name an enterable name which saves the cookie different based on name (will save multiple cookies)
        {
            var d = new Date();
            var TimeSaved = new Date(); //Saves the current time
            d.setTime(d.getTime() + (30*24*60*60)); //sets the expiration a month from current time
            var expires = "expires="+ d.toUTCString();//sets the expiration a month from current time
            if (SaveNum == SaveNum)
            {   // &%&%& seperates the values of the array for the javascript cookie
                // The array should go  ( Saveame(savenum) = ( Timesaved,Score,Bubbles Per Second Total, PowerUp amonut 1, PowerUp amount 2..... etc. ))
                document.cookie =
                "SaveTime"+SaveNum + "=" + //Cookie Name       . intScore may already be represented as "i" on score-board.php
                TimeSaved + "&%&%&" + i + "&%&%&" + floatBPS + "&%&%&" +  //STILL NEED TO STORE BUBBLES PER SECOND
                // puAmount1 + "&%&%&" + puAmount2 + "&%&%&" + puAmount3 + "&%&%&" + puAmount4 + "&%&%&" + puAmount5 + "&%&%&" + puAmount6 + "&%&%&" + puAmount7 +
                ScriptArray[0][0] + "&%&%&" + ScriptArray[1][0] + "&%&%&" + ScriptArray[2][0] + "&%&%&" + ScriptArray[3][0] + "&%&%&" + ScriptArray[4][0] + "&%&%&" + ScriptArray[5][0] + "&%&%&" + ScriptArray[6][0] + "; "
                + expires + ";path=/";
                      
                    // in the future I solemly swear to never do this again LOL
                  //Note to me later, no dont copy this, just use php cookies
                //In the future we would want to take the name of the bubble blower instead of looping savenum (for multiple reasons possibly)
                // you can possibly find the savename or bubble name lower in this document in the function nameChanger() as variable x
                SaveNum += 1;
                alert(SaveNum); //TEMPORARY SO I CAN SEE THE LOOP RUNNING CORRECTLY AND THAT IT MAKES THE NUMBER GO UP 
            }
            alert(document.cookie) //displays all java cookies
                                  
            
            //document.cookie = "username=John Smith; expires=Thu, 18 Dec 2013 12:00:00 UTC; path=/"; // EXAMPLE COOKIE
        }

        //the goal the newbubbles function is to calculate the new bubbles based off of the current Bubbles per second
        // function NewBubbles() 
        // {
        //     var CurrentTime = new Date();
        //     var TimeDif;
        //     var TimeSave = daCookies.SaveTime
            
        //     TimeDif = CurrentTime.getTime() - TimeSave.getTime();
        //     alert(TimeDif);
        // }

        //Change name of 
        function nameChanger() {
            var nameChangeVariable = document.getElementById("name").value;

            //Note for antonio from mitchell - Since I already have X index variable I changed your x variable to "nameChangeVariable"
            //to minimize confusion
            
            if(nameChangeVariable != "")
            {
                document.getElementById("change").innerHTML = nameChangeVariable;
            }
        }

        // The goal of the function below is to split and store the cookies in an array
        function extractCookies() 
        {
            daCookies = document.cookie
            .split(";")
            .map(cookie=> cookie.split("="));
            alert(daCookies);
            // include "./Control/saves-table.php";
        }
            
        function minusDates(daCookies) // for operations you would want to change this to accept a name (like from a button)
        {
            var millis;
            var c = new Date();
            // var d  = new Date();
            // millis = c.getTime() - d.getTime();
            millis = c.getTime() - new Date(daCookies[1][1]).getTime();//NEEDS TO BE CHANGED DIFFERENTLY TO USE OTHER COOKIES DYNAMICALLY 
        	alert(millis/1000);//DACOOKIES TIME AND FINDS THE DIFFERENCE BETWEEN NOW AND WHEN THAT TIME WAS SAVED IN SECONDS
        }

        // scorePerSecond Function Goal
            // use a setInterval(function, 1000ms) to run the function every second and add floatBPS to score
            // important to note:
                // do not want "i" (score), to ever be non int
                // only add to score once the floatAddedBubbles value is over 0
                //keep the leftover/remainders if any, and add them back to/keep in floatAddedBubbles so the player does not loose any score
            // important to note:
        // scorePerSecond Function Goal
        function scorePerSecond() //you dont need to add anything in here to run it every second because setInterval(function, 1000ms) runs it where it lies
        {
            
        }




        // var myVar = null;
        // img = document.getElementById("bubble-size"); 

        // function bubbleClicker()
        // {
        //     img.classList.remove("clickClass");
        //     img.classList.add("clickClass");
        // } 
        </script>
                    <!-- Trigger/Open The Modal
                    <button id="myBtn">Open Modal</button>

                    <!-- The Modal -->
                    <!-- <div id="myModal" class="modal"> -->

                    <!-- Modal content -->
                        <!-- <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Some text in the Modal..</p>


                        </div>
                    </div> -->

    </div>  
<!-- Web Grid -->
</body>
</html>