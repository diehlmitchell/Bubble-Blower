<script>

    //Ajax Function 
    function AjaxCall(GameBPS, GameName, GameScore)
    {
        //Ajax Function
        $.ajax({

            type: "POST",
            url: "./Controller/ajax-save.php",
            data: "BPS=" + GameBPS + "&Name=" + GameName + "&Score=" + GameScore,
            success: function(data){
                $("#cookie-saver").html(data);
            },
            error: function(data){
                alert('An error occured while trying to save your game.');
            },

        });
    }

</script>