var open=false;
var mySocket = new WebSocket("ws://localhost:8888");
var user = $('#username');

mySocket.onopen=function () {
  open= true;
   console.log('connected');
   $('#chat').append('<p>Connected</p>');
   usr ='<li class="media">'+
         '<div class="media-body">'+
             '<div class="media">'+
                 '<a class="pull-left" href="#">'+
                     '<img class="media-object img-circle " src="assets/img/user.png" />'+
                 '</a>'+
                 '<div class="media-body" >'+
                 user.val()+
                     '<br />'+
                    '<small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>'+
                     '<hr />'+
                 '</div>'+
             '</div></div></li>';
   $('userlist').append(usr);
}

mySocket.onclose=function () {
  open=false;
   console.log('disconnected');
   $('#chat').append('<p>Disconnected</p>');
}

mySocket.onmessage=function (data) {
   var response = data.data;
   $('#chat').append('<p>recieved: '+response+'</p>');
}

mySocket.onerror=function (error) {
   console.log('error'+error);
   console.log(error);
   $('#chat').append('<p>Server Error</p>');
}

$('#send').click(function(event) {
  console.log('click'+$('#message').val());
  msg = '<li class="media">'+
        '<div class="media-body">'+
            '<div class="media">'+
                '<a class="pull-left" href="#">'+
                    '<img class="media-object img-circle " src="assets/img/user.png" />'+
                '</a>'+
                '<div class="media-body" >'+
                $("#message").val()+
                    '<br />'+
                   '<small class="text-muted">Alex Deo | 23rd June at 5:00pm</small>'+
                    '<hr />'+
                '</div>'+
            '</div></div></li>';
  mySocket.send(msg);
  //$('#message').val('');
});
