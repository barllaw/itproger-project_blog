$('#reg-btn').click(function(){
    email = $('#inputEmail').val();
    login = $('#inputLogin').val();
    pass = $('#inputPassword').val();

    $.ajax({
        url: 'inc/reg.php',
        type: 'POST',
        cache: false,
        data:{
            'email':email,
            'login':login,
            'pass':pass,
        },
        success: function(data){
            if(data == 'ok'){
                $(location).attr('href','/auth');
            }else{
                $('#error').text(data);
            }
        }
    })

});

$('#auth-btn').click(function(){

    login = $('#inputLogin').val();
    pass = $('#inputPassword').val();

    $.ajax({
        url: 'inc/auth.php',
        type: 'POST',
        cache: false,
        data:{
            'login':login,
            'pass':pass,
        },
        success: function(data){
            if(data == 'ok'){
                $(location).attr('href','profile');
            }else{
                $('#error').text(data);
            }            
        }
    })

});

function delete_user(id){
    $.ajax({
        url: 'inc/delete.php',
        type: 'POST',
        cache: false,
        data:{
            'id':id,
        },
        success: function(data){
            if(data == 'ok'){
                $('.user'+id).css('display', 'none');
            }
        }
    })


}

$('#add_artc-btn').click(function(){

    title = $('#title').val();
    intro = $('#intro').val();
    text = $('#text').val();

    $.ajax({
        url: 'inc/add_artc.php',
        type: 'POST',
        cache: false,
        data:{
            'title':title,
            'intro':intro,
            'text':text,
        },
        success: function(data){
            if(data == 'ok'){
                $('#error').text('done');
            }else{
                $('#error').text('error');
            }
        }
    })
})

$('#callback-btn').click(function(){

    email = $('#email').val();
    message = $('#message').val();

    $.ajax({
        url: 'inc/callback.php',
        type: 'POST',
        cache: false,
        data:{
            'email':email,
            'message':message,
        },
        success: function(data){
            if(data == 'ok'){
                $('#error').text('done');
            }else{
                $('#error').text(data);
            }
        }
    })
})

$('#message-btn').click(function(){

    message = $('#message').val();

    $.ajax({
        url: 'inc/send_mess.php',
        type: 'POST',
        cache: false,
        data:{
            'message':message
        },
        success: function(data){
            if(data == 'error'){
                $('#error').text('Введите текст!')
            }else{
                $('.mess_empty').remove();
                $('.mess-wrap').append(data);
            }
        }
    })
})
function load_chat() {
	$.ajax({
        url: 'inc/load_chat.php',
        cache: false,
        success: function(data){
            if(data == 'empty'){
                $('.mess_empty').remove();
                $('.mess-wrap').append("<div id='mess' class='mess_empty'>Сообщений нет!</div>");
            }else{
                $('.mess').remove();
                $('.mess-wrap').append(data);
            }
        }
    })
}
load_chat();

setInterval( function() {
	load_chat();
}, 2000);