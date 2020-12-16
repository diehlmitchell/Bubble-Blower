<link rel="stylesheet" href = "./View/Public/Styles/score-board-styles.css">

    <script>

        i = 0; //this I variable is the score
        var countFunction;
        
        function Count() {
            document.getElementById("output").innerHTML = i++ + 1;
            countFunction = document.getElementById("output").innerHTML;
        }
        
        function displayNoCount() {
            document.getElementById("output").innerHTML = i;
        }
        
    </script>

