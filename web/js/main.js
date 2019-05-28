
$( document ).ready(function() {
    function stopDefAction(evt) {
        evt.preventDefault();
    }

    document.getElementById('task-trigger').addEventListener(
        'click', function(evt){
        /*$('.hidden_task').css('display', 'flex');
    });*/
            evt.preventDefault();
            $('.hidden_task').css('display', 'block');
    $.ajax({
        url: "/index.php?r=task",
        type: "POST",


        error: function() {console.log(222);},
        success: function(answer) {$('.hidden_task').html(answer);
        }
        }) })

});

/*
$( document ).ready(function() {
    function stopDefAction(evt) {
        evt.preventDefault();
    }

    document.getElementById('task-trigger').addEventListener(
        'click', stopDefAction, false
    );

    $('#task-trigger').on('click', function(){
        /!*$('.hidden_task').css('display', 'flex');
    });*!/
        $.ajax({
            url: "/index.php?r=task/add",
            type: "POST",
            dataType : "json",

            error: function() {console.log(222);},
            success: function(answer) {console.log(111);
            }
        }) })

});*/
