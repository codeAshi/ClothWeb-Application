$(document).ready(function(){
    $('#loadButton').click(function(){
        $.ajax({
            url: 'data.php',
            type: 'GET',
            dataType: 'json',
            success: function(response){
                $('#result').html(response.message);
            },
            error: function(){
                $('#result').html('An error occurred');
            }
        });
    });
});
