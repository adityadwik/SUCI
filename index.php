
<?php
session_start();
ini_set('display_errors', 0);
if($_SESSION["salah"] >= 3){
echo "<script>alert('Anda Diblokir'); window.location = ('error.php')</script>";
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script src="assets/sweetalert2/dist/sweetalert2.js"></script>
        <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body>
        <form id="frm01" name="frm01" method="POST" class="form-signin" action="Login.php">
            <div class="text-center mb-4"></div>
            <center>
            <img class="mb-4" width="100" height="100" margin-top="90px" src="assets/image/kunci.png">
            </center>
        <div class="container">
	<div class="login-form col-md-4 offset-md-4">
		<h1 class="title">Masuk Yuk..!</h1>
        <form method="post">
			<div class="form-group">
				<label>Username</label>
                                <input class="form-control" name="usr" id="usr" type="user" placeholder="Email Address" autofocus="yes" autocomplete="no">
			</div>
			<div class="form-group">
				<label>Password</label>
                                <input class="form-control" name="pass" id="pass"type="password" placeholder="Password">
			</div>
			<div class="checkbox mb-3">
				<input type="checkbox"> Remember me
			</div>
            <button class="btn btn-lg btn-dark gray btn-block" type="submit"> Sign in</button>
		</form>
	</div>
	</div>
    </body>
</html>

    
