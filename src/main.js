import './style.scss';

import M from 'materialize-css';
M.AutoInit();

$(document).ready(function(){
     $('.preload').fadeOut(1000);
});

$.ajax({
    url: 'action',
    success: function(){
        alert('Load was performed.');
    }
});
$(document).ready(function(){
   $('#form').submit(function(e){
        e.preventDefault();

        $.ajax({
            url: 'action.php',
            type: 'post',
            data: $('#form').serialize(),
            success: function(){
                $('#modal1').modal('open');
                $("#form").trigger('reset');
            }
        });

    });
});


