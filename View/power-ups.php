<link rel="stylesheet" href = "./View/Public/Styles/power-up-styles.css">

<?php
    $powerUpsArray = array (  // array("Actual Image Name","Alt","Display Name", amount,Cost, bubbles per second)
        array("squid-bubble.jpg","Squid-Bubble image", "Squidward",0,10, 0.2),  
        array("patrick-bubble.jpg","patrick-bubble image", "Patrick",0,40, .5),  
        array("sponge-bubble.jpg","sponge-bubble image", "Sponge-bob",0,100, 1),
        array("hitman-bubble.jpg","hitman-bubble image", "Hitman",0,750, 3),
        array("suds-bob.jpg","suds-bob image", "Suds-Bob",0,3000, 15),
        array("dirty-bubble.png","dirty-bubble image", "Dirty Bubble",0,10000, 50),
        array("jugg-bubble.jpg","jugg-bubble image", "Bubble jugg",0,100000, 150)
    );  //end of the power ups array
?>

<div class ="power-ups-grid">
    <?php
        // $CurrentPrice;        
        for($X = 0; $X < count($powerUpsArray);$X++)
        {

            // THE CODE BELOWS GOAL AND ONLY PURPOSE TO DISPLAY POWER UPS ON THE PAGE
            echo"
                <div class = 'power-up' onclick='AddsCount($X)'> 
                    <img src='./View/Public/Images/Power-Ups/{$powerUpsArray[$X][0]}'>
                    <div class ='power-up-text' >  
                        <p id='NameOutPut'>{$powerUpsArray[$X][2]}</p>
                        <p id='AmountOutPut{$X}'>AOP</p>                                                                                       
                        <p id='BPS-Output'> BPS:{$powerUpsArray[$X][5]}</p>     
                        <p id='PriceOutPut{$X}'>POP:{$powerUpsArray[$X][4]}</p>               
                    </div>
                </div>
            ";
            // THE CODE ABOVE GOAL AND ONLY PURPOSE TO DISPLAY POWER UPS ON THE PAGE

        }
    ?>

    <script>                 
            var ScriptArray =[  // array("amount","Cost","BPS") -- BPS = "Bubbles Per Second"
            [0,10, 0.25],  
            [0,40, 0.5],
            [0,100, 1],  
            [0,500, 3],
            [0,4500, 15],
            [0,10000, 50],
            [0,75000, 150]
            ];
            floatBPS = 0;
        // $powerUpsArray = $powerUpsArray+1;
        function AddsCount(X) 
        { 
            var CurrentPrice = ScriptArray[X][1];     
            //DOESNT WORK AM I AM STOPID? ! I DUNT KKONWO 
            //the problem: the loop is never ran on click/ or more precisely the function does not have an effect when the onclick is ran
            //possible solutions/causes: 
        //1   // It is very possible that the scope of some variables or values are not visible to this function so it cannot run or do math without those vars
        //2   // it is unlikely that the more expensive cards are writing their boxes overtop the cheaper options, so it cant be run
        //3   //it is somewhat likely that the function and if statement are running correctly, but theres a logic error and i placed comparable operators wrong
              // or the scriptX is the largest power up number and therefore too expensive

            if(CurrentPrice <= i)
            {
                ScriptArray[X][0]++; //amount
                
                //just stored the script array value there so no need for this
                // ("puAmount" + (X+1)) = ScriptArray[X][0]; //in order for the cookie to work I need to make the puAmount variable and incriment it
                // console.log(puAmount1); 
                //just stored the script array value there so no need for this

                floatBPS += parseFloat(ScriptArray[X][2]); //references the script arrays last value which is labeled bubbles per second above
                // console.log(floatBPS)

                i = i-CurrentPrice; //i is the amount of score you currently have, problem would be trying to get that variable seen from the current scope
                document.getElementById('AmountOutPut'+X).innerHTML = ScriptArray[X][0];
                    //hello there
                CurrentPrice = Math.round(ScriptArray[X][1]+(.15*ScriptArray[X][1]));
                ScriptArray[X][1] = CurrentPrice;
                document.getElementById('PriceOutPut'+X).innerHTML = "POP:" + CurrentPrice;
                document.getElementById('output').innerHTML = i;
                //this is where i have to fix things later today : aye :
            }
        }
    </script>
    
    <!-- <div onclick='addPower({$powerUpsArray[$X][3]})' class =  "power-up">
            <img src = "./Public/Images/Power-Ups/squid-bubble.jpg" alt="squid-bubble.jpg">
            <p> Squid Bubble</p>
            <p>0</p>
    </div> -->

    <!------------------------------- IDEAS ------------------------------------------- AND STUFF --------------------------------------------------------->
<!--CurrentPrice = BaseCost*(1.15**{$powerUpsArray[$X][3]}) -->
    <!-- Notes and ideas; to save time or effort, switch case based on the $X that adds to the $powerUpsArray[$X][3]
     amount and subtracts cost from the current bubble amount
    (if theres enough bubbles), which would be "$powerUpsArray[$X][4] < score" 
    ---Must be in javascript because PHP will not communicate with the array after it started (or something like that idk)
    -->
    
        <!--If we have additional worktime: Add a way to grab and store system time,
         when you start to play again it grabs a new system time and calculates bubbles per second and seconds passed, adds your new score -->
         <!-- <p>Date/Time: <span id="datetime"></span></p>
         var dt = new Date();
         document.getElementById("datetime").innerHTML = dt.toLocaleString(); -->
    <!------------------------------- IDEAS ------------------------------------------- AND STUFF --------------------------------------------------------->

</div>