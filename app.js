$(function() {


    let category = "technology";


     $.post('api-data.php', {category}, function (response) {

        $('#post').html(response);
       // console.log(response);
    });

    $(document).on('click', '.categories', function () {
            
        let element = $(this)[0];
            let category = $(element).attr('categoryId');

                $.post('api-data00.php', {category}, function (response) {

                    $('#post').html(response);
                   // console.log(response);
                });

           
    });
    $('#search').submit(function(e) {
                
           let keywords = $('#name').val();

        e.preventDefault();
        //console.log(postData);
        
        $.post('api-data01.php', {keywords}, function(response) {
            console.log(response);
            $('#post').html(response);
            $('#search').trigger('reset');
        });
    })

});