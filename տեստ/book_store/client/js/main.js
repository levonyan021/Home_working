jQuery(document).ready(function($) {
    $("#add-button").on('click', function() {
        let name = $("#author_name").val();
        $("#author_name").val('')
    });

    if($("main").hasClass("all-authors")) {
        $.ajax({
            url:'./../../../server/controllers/AuthorController.php',
            method:'post',
            data:{action:'all-authors'},
            dataType:"json",
            success:function(data) {
                console.log(data);
            }
        })
    }

})