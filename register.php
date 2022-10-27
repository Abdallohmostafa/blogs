<?php
require_once('connect.php');
require_once ('header.php');

echo '<h2 class="w3-container w3-black">register</h2>';
?>
<?php
if (isset($_POST['sign'])) {
    $username   =$_POST['username'];
    $email      =$_POST['email'];
    $password   =$_POST['password'];

    $sql= "INSERT INTO admin (username,email,password) VALUES (?,?,?)";
    $stmtinsert= $dbcon->prepare($sql);
    $result= $stmtinsert->execute([$username,$email,$password]);

    if($result){
        echo "sucssesfully registeration"; 
    }else{
        echo "please insert correct data";
    }
    }

    
?>
<html>

<body>
    <div>
        <form action="register.php" method="post" class="w3-container w3-padding">
            <label>Username </label>
            <input type="text" name="username" class="w3-input w3-border" required>
            <label>email </label>
            <input type="email" name="email" class="w3-input w3-border" required>
            <label>Password</label>
            <input type="password" name="password" class="w3-input w3-border" required>

            <input type="submit" name="sign" value="sign up" class="w3-btn w3-black">
        </form>
    </div>
</body>

</html>
<?php include("footer.php"); ?>