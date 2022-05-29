<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
error_reporting(0);
session_start();
include_once("library/koneksi.php");

if(@$_POST["login"]){ //jika tombol Login diklik
	$username=$_POST["username"];
	$password=$_POST["password"];
	
		if($username!="" && $password!=""){
		include_once("library/koneksi.php");
		$query = "SELECT * FROM login WHERE username = '$username'";
		$hasil = mysql_query($query) or die("Error");
		$data  = mysql_fetch_array($hasil);
		
		if($data["username"] == $username && $data["password"] == $password){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
			$_SESSION["username"]=$data["username"];
			$_SESSION["id_user"]=$data["id_user"];
			$_SESSION["nama"] = $data["nama"];
			$_SESSION["password"]=$data["password"];
			$_SESSION["hak_akses"] = $data["hak_akses"];
			if($data["hak_akses"]=="Admin"){
            header("Location:admin/index.php");
        }else if($data["hak_akses"]=="Member"){
            header("Location:member/index.php");
        }
		
else{
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}
}}

?>
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" method="post" class="form-signin">
			<font size = 4 color="white" face="Times New Roman"><center>SELAMAT DATANG DI SISTEM INFORMASI KOPERASI RIMUNJA</center></font><br>
			<br>
                <label>Username</label><br>
                <input type="text" autofocus required name="username" placeholder="Username" class="form-control" /><br>
				 <label>Password</label><br>
                <input type="password" required name="password" placeholder="Password" class="form-control" />
				<input type="submit" name="login" value="Login" class="btn btn-info"/>
				<input type="reset" name="reset" value="Reset" class="btn btn-danger"/>
            </form>
        </div>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>