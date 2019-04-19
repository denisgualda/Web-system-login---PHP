<html>
<body>
<head>
</head>
<?php
session_start();
//read connection.php file for connect mysql database
include_once "connection.php"; 
function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and password = '$password'";
    $rec = mysql_query($sql);
    $count = 0;
 
    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
    }
 
    if($count == 1)
    {
        return 1;
    }
 
    else
    {
        return 0;
    }
}
 
if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
      if(verificar_login($_POST['user'],md5($_POST['password']),$result) == 1) 	
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:login.php");
        }
        else
        {
            echo '<div class="error">User incorrect. Try again.</div>';
        }
    }
?>
<!-- CSS from style -->
<style type="text/css">
*{
    font-size: 14px;
}
body{
background:#aaa;
}
form.login {
    background: none repeat scroll 0 0 #F1F1F1;
    border: 1px solid #DDDDDD;
    font-family: sans-serif;
    margin: 0 auto;
    padding: 20px;
    width: 278px;
    box-shadow:0px 0px 20px black;
    border-radius:10px;
}
form.login div {
    margin-bottom: 15px;
    overflow: hidden;
}
form.login div label {
    display: block;
    float: left;
    line-height: 25px;
}
form.login div input[type="text"], form.login div input[type="password"] {
    border: 1px solid #DCDCDC;
    float: right;
    padding: 4px;
}
form.login div input[type="submit"] {
    background: none repeat scroll 0 0 #DEDEDE;
    border: 1px solid #C6C6C6;
    float: right;
    font-weight: bold;
    padding: 4px 20px;
}

</style>
 
<form action="" method="post" class="login">
    <div><label>Username</label><input name="user" type="text" ></div>
    <div><label>Password</label><input name="password" type="password"></div>
    <div><input name="login" type="submit" value="login"></div>
</form>
<?php
} else {
?>
<!-- logout function -->
<?php
	
    echo '<a href="logout.php"><h3>Logout</h3></a>';
}
?>
</body>
</html>
