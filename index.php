<?php
    // session_destroy();
    //if you start a session in the same browser (like the Fortisuremart sessions) then it will store a session in the cookie. this destroys it
?>

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

                <p onClick="myJsFunction()" id="input1">Bubbles Blown: <span id="output"> 0</span></p>

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
                                <input type="text" id="name" name="name" value="Bubble Blower">
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
                <button onclick="deleteAllCookies()">Place Holder</button>
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
            deleteAllCookies()
            var d = new Date();
            var TimeSaved = new Date(); //Saves the current time
            d.setTime(d.getTime() + (30*24*60*60)); //sets the expiration a month from current time
            var expires = "expires="+ d.toUTCString();//sets the expiration a month from current time
            if (SaveNum == SaveNum)
            {   // &%&%& seperates the values of the array for the javascript cookie
                // The array should go  (Saveame(savenum) = ( Timesaved,Score,Bubbles Per Second Total, PowerUp amonut 1, PowerUp amount 2..... etc. ))

             //clear cookies before you add one
                document.cookie =
                    document.getElementById("name").value + "=" +  //Cookie Name       . intScore may already be represented as "i" on score-board.php
                    TimeSaved + "&%&%&" + i + "&%&%&" + floatBPS + "&%&%&" +
                    ScriptArray[0][0] + "&%&%&" + ScriptArray[1][0] + "&%&%&" + ScriptArray[2][0] + "&%&%&" +
                    ScriptArray[3][0] + "&%&%&" + ScriptArray[4][0] + "&%&%&" + ScriptArray[5][0] + "&%&%&" + ScriptArray[6][0] + "; "
                    + expires + ";path=/";
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
        var nameChangeVariable = document.getElementById("name").value;
        //Change name of 
        function nameChanger() {
            nameChangeVariable = document.getElementById("name").value;

            //Note for antonio from mitchell - Since I already have X index variable I changed your x variable to "nameChangeVariable" to minimize confusion
    
            if(nameChangeVariable != "")
            {
                document.getElementById("change").innerHTML = nameChangeVariable;
            }
        }

        function deleteAllCookies() 
        {
            var cookies = document.cookie.split(";");
            for (var i = 0; i < cookies.length; i++) 
            {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }// This function indeed works (or not i guess )


        // The goal of the function below is to split and store the cookies in an array
        function extractCookies() 
        {
            // daCookies0 = document.cookie
            // .split(";")

            daCookies = document.cookie //then split the dacookies[1]
            .split("&%&%&")
            .map(cookie=> cookie.split("="));

            var FullDacookies;
            var arrayNum1 = 0;
            var arrayNum2 = 1;
            for(index = 0; index <=daCookies.length; index++)
            {
                FullDacookies = daCookies[arrayNum1].concat(daCookies[arrayNum2]);
            }
            alert(daCookies);
            // include "./Control/saves-table.php";
            
            //after you extract into different arrays, put the elements into the ScriptArray[X][X] 
            //as a reminder, ScriptArray[A][B] goes A=PowerUpID B="element changed (0) aka amount"
            
            //change name part (does it later idc)
            
            i = Math.round(daCookies[1][0]);
            floatAddedBubbles = daCookies[2][0];
            funcRunning = "f";
            ScriptArray[0][0] = daCookies[3][0];
            ScriptArray[1][0] = daCookies[4][0];
            ScriptArray[2][0] = daCookies[5][0];
            ScriptArray[3][0] = daCookies[6][0];
            ScriptArray[4][0] = daCookies[7][0];
            ScriptArray[5][0] = daCookies[8][0];
            ScriptArray[6][0] = daCookies[8][0];
            console.log(i);
            console.log(ScriptArray);
            document.getElementById("output").innerHTML = i; //actually displays correctly very cool
            console.log(daCookies);
            console.log("floatbelow");
            console.log(floatBPS);
            console.log(funcRunning);
            
        }
            
        function minusDates(daCookies) // for operations you would want to change this to accept a name (like from a button)
        {
            daArrayName = document.getElementById("name").value;
            // console.log(daArrayName);
            console.log(daCookies);
            var millis;
            var c = new Date();
            // var d  = new Date();
            // millis = c.getTime() - d.getTime();
            millis = c.getTime() - new Date(daCookies[0][1]).getTime();//VARIABLE is equal to a number based on if it equals an arrays first value
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
        IntAddedBubbles = 0; //the variable that SHOULD be displayed back to the score
        floatAddedBubbles = 0; // floatAddedBubbles should NOT be the displayed variable
        funcRunning ='f'; //this makes sure the function isnt ran while its already running therefore preventing score loss or other bugs
        if(funcRunning == 'f')
        {
            setInterval(scorePerSecond, 1000); //runs in milliseconds
        }
        function scorePerSecond() //you dont need to add anything in here to run it every second because setInterval(function, 1000ms) runs it where it lies
        {
            funcRunning = 't';
            floatAddedBubbles += floatBPS;
            // console.log(floatAddedBubbles+ " FAB1");

            if(floatAddedBubbles >= 1)
            {
                IntAddedBubbles = Math.round(floatAddedBubbles);  // perhaps change this later as this could lag this site on higher bubbles per second
                i += IntAddedBubbles;
                floatAddedBubbles = floatAddedBubbles-IntAddedBubbles; 

                // console.log(floatBPS + "BPS")
                // console.log(IntAddedBubbles +"IAB")
                // console.log(floatAddedBubbles+ "FAB2")
                // console.log(i+ "score") //the score is changing, however it is NOT updating its value on the page
                displayNoCount()
                funcRunning ='f';
            }
            else
            {
                funcRunning ='f';
            }
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