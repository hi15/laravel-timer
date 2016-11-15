<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timer</title>
</head>
<body>
    <h1>Users</h1>

    <div id="app">
        <!-- <li v-for="user in users">{{ user }}</li> -->
        <p>{{ cont }}</p>
        <button v-on:click="counter">Iniciar</button>
    </div>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.js"></script>

    <!-- </script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.5.1/socket.io.js"></script>

    </script> -->
    <script>

    // var socket = io('http://127.0.0.1:3000');

    var app = new Vue({
        el: '#app',
        data: {
            cont : 1000,
        },
        methods: {
            counter: function(){
                self  = this; //instancia vue
                setInterval(function(){
                    self.$data.cont--; //como acessar a instancia
                }, 1000);
            }
        }
    })

    </script>
</body>
</html>
