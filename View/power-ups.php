<link rel="stylesheet" href = "./View/Public/Styles/power-up-styles.css">

<?php
    $powerUpsArray = array (  // array("Actual Image Name","Alt","Display Name", amount,Cost, bubbles per second)
        array("squid-bubble.jpg","Squid-Bubble image", "Squidward",1,10, 0.2),  
        array("patrick-bubble.jpg","patrick-bubble image", "Patrick",0,40, .5),  
        array("sponge-bubble.jpg","sponge-bubble image", "Sponge-bob",9,100, 1),
        array("hitman-bubble.jpg","hitman-bubble image", "Hitman",0,750, 3),
        array("suds-bob.jpg","suds-bob image", "Suds-Bob",0,3000, 15),
        array("dirty-bubble.png","dirty-bubble image", "Dirty Bubble",0,900, 50),
        array("jugg-bubble.jpg","jugg-bubble image", "Bubble jugg",11,100000, 150)
    );  //end of the power ups array

?>

<div class ="power-ups-grid">
    <?php
        // $CurrentPrice;        
        for($X = 0; $X < count($powerUpsArray);$X++)
        {
            $CurrentPrice = round($powerUpsArray[$X][4]*(1.15**$powerUpsArray[$X][3]));
            echo"
                <div class = 'power-up'>
                    <img src='./View/Public/Images/Power-Ups/{$powerUpsArray[$X][0]}'>
                    <div class ='power-up-text'>  
                        <p>{$powerUpsArray[$X][2]}   <br> amount:{$powerUpsArray[$X][3]} <br> BPS:{$powerUpsArray[$X][5]} </p>     
                        <p>Bubble Cost: $CurrentPrice</p>               
                    </div>
                </div>
            ";
        }
    ?>

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