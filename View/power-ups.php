<link rel="stylesheet" href = "./View/Public/Styles/power-up-styles.css">

<?php
    $powerUpsArray = array (  // array("Actual Image Name","Alt","Display Name", amount)
        array("squid-bubble.jpg","Squid-Bubble image", "Squidward",0),  
        array("patrick-bubble.jpg","patrick-bubble image", "Patrick",0),  
        array("sponge-bubble.jpg","sponge-bubble image", "Sponge-bob",0),
        array("hitman-bubble.jpg","hitman-bubble image", "Hitman",0),
        array("suds-bob.jpg","suds-bob image", "Suds-Bob",0),
        array("dirty-bubble.jpg","dirty-bubble image", "Dirty Bubble",0),
        array("jugg-bubble.jpg","jugg-bubble image", "Bubble juggernog",0)
    );  //end of the power ups array

?>

<div class ="power-ups-grid">
    <?php 
        for($X = 0; $X < count($powerUpsArray);$X++)
        {
            echo"
                <div class = 'power-up'>
                    <img src='./View/Public/Images/Power-Ups/{$powerUpsArray[$X][0]}'>
                    <p>{$powerUpsArray[$X][2]}</p>
                    <p>{$powerUpsArray[$X][3]}</p>
                </div>
            ";
        }
    ?>

    <!-- <div class = "power-up">
            <img src = "./Public/Images/Power-Ups/squid-bubble.jpg" alt="squid-bubble.jpg">
            <p> Squid Bubble</p>
            <p>0</p>
    </div> -->

</div>