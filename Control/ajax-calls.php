<script>

    //Ajax Function 
    function AjaxCall(GamePowerUp, GameScore, GameName)
    {
        //Ajax Function
        $.ajax({

            type: "POST",
            url: " ",
            data:  ,
            success: function(data){
                $(" ").html(data)
            },
            error: function(data){
                alert('');
            },

        });
    }

</script>