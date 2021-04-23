<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration</title>
        <link rel="icon" href="logo2.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
        <script src="JS.js"></script>
</head>

<body>
        <div class="main">
                <form name="frm1" action="database1.php" onsubmit="return check()">
                        <div class="row">
                                <div class="col-sm-3" id="bord1">
                                        <div class="line1"> Welcome Back!</div>
                                        <br><br><br><br><br>
                                        <div class="line2a"> To keep up connected with us please </div>
                                        <br>
                                        <div class="line2b"> login with your personal info </div>
                                        <br><br>
                                        <div class="button">
                                     <a href="login-page.html"><input type="submit" value="LOGIN" class="submit"></a>
                                        </div>
                                </div>
                                <div class="col-sm-9" id="bord2" style="background-color:rgba(255,255,255,0.6);">
                                        <div class="line3a">Create Account</div>
                                        <br>
                                        <a href="#"><img class="logo1" src="fb.png" alt=""></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#"></a><img class="logo2" src="go.png" alt=""></a>&nbsp;&nbsp;&nbsp;
                                        <a href="#"></a><img class="logo3" src="in.png" alt=""></a>
                                        <br>
                                        <div class="line3b">or use your email for registration</div>
                                        <br>
                                        <input class="inpt" type="text" placeholder="Name" name="name"><br>
                                        <input class="inpt" type="text" placeholder="Email" name="email"><br>
                                        <input class="inpt" type="text" placeholder="Password" name="password"><br>
                                        <input class="sbmt" type="submit" value="SIGN UP">
                                </div>
                        </div>
                </form>
        </div>
</body>
</html>