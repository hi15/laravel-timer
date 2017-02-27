<!DOCTYPE html>
<html>
    <head>
        <title>Real-time Web Applecation</title>
    </head>
    <body>
        <hi> New Users</hi>
        <ul>
          <li v-repeat="user: users">@{{ user }}</li>
        </ul>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
        <script>
          var socket = io('http://localhost:3000');
          new Vue({
            el: 'body',
            data: {
              users: []
            },
            ready: function() {
              socket.on("test-channel:App\\Events\\UserSignedUp",function(data){
                console.log(data);
                this.users.push(data.username);
              }.bind(this));
            }
          });
        </script>
    </body>
</html>
