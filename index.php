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

    <title>Document</title>

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
                <img onClick="Count()" class='bubble-png' src='./View/Public/Images/Bubble.png'>
            </div>
        <!-- Center  -->
           

        <!-- Scoreboard (Right Side) -->
            <div class='score-board-grid'>

                <?php
                    include './View/score-board.php';
                ?>

                <p onClick="myJsFunction()" id="input1">Bubble Blower <span id="output">0</span></p>

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

            </div> -->
  
        <!-- Scoreboard (Right Side) -->
    </div>  
<!-- Web Grid -->
</body>
</html>