<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timer</title>
</head>
<body>
    <h1>Users</h1>

    <ul id="app">
        <li v-for="user in users">{{ user }}</li>
    </ul>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>

    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.min.js"></script>

    </script>
    <script>

    var socket = io('http://127.0.0.1:3000');

    new Vue({
        el: '#app',
        data: {
            users: []
        },
        mounted: function(){
            socket.on('test-channel:EventoTeste', function(data){
                this.users.push(data.username);
            }.bind(this));
        }
    })


    </script>
</body>
</html>
