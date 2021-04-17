<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
    <div id="app">
    
        <div class="container">
            
            <!-- FORM BS -->
            <form action="classes/UserController.php" method="GET">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Username</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="text" name="username" type="text" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Password</label> 
                <div class="col-8">
                <input id="text" name="password" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nome Completo</label> 
                <div class="col-8">
                <input id="text1" name="fullname" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" value="gravar" class="btn btn-primary">Gravar</button>
                </div>
            </div>
            </form>
            <!-- FIM DO FORM -->

            <table class="table">
                <tr v-for="user in users">
                    <td>{{ user.username }}</td>
                    <td>{{ user.password }}</td>
                    <td>{{ user.name }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

<script>
    var app = new Vue({
        el: '#app',
        data: {
            message: 'Hello Vue!',
            users : []
        },
        mounted() {
            var that = this;
            fetch("classes/UserController.php")
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                that.users = data;
            })
        }
    })
</script>