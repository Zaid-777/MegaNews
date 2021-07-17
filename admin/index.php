<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="images/newsIcon.ico">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <div class="col-md-12" style="margin-top: -50px;">
                            <img class="logo" src="images/news.png">    
                        </div>
                        <div class="col-md-12">
                           <h2 class="heading">Admin</h2>
                            <!-- Form Start -->
                            <form  action="" method ="POST" autocomplete="off">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="" required>
                                    <div id="Username"></div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="" required>
                                    <div id="Password"></div>
                                </div>
                                <input type="submit" name="login" class="btn btn-primary" onclick="update()" value="Login" />
                                <a class="btn btn-success" href="post.php">Direct Login</a>
                            </form>
                            <!-- /Form  End --> 
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function update(){
        var Username      =  document.getElementById('username').value;
        var Password  =  document.getElementById('password').value;

        // document.getElementById('Username').innerText           = Username;
        // document.getElementById('Password').innerText       = Password;

        if(Password == "" || Username == ""){
            alert("Please, Fill All Fields !!!");
        }
        else{
            alert("Successfully Login!");
        }
    }    
</script>
