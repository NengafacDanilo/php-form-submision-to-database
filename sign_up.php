<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Sign-Up Form</title>
</head>
<body>
    <div class="container">
        <div class=" box form-box">

            <!----php code-->
            <?php
            include("config.php");
            if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $password = $_POST['password'];

               // verifying if email is unique//
$verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email = '$email'");
if(mysqli_num_rows($verify_query) !=0){
    echo "<div class='message'><p> This email is used, Try another one please!</p></div><br>";
    echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button></a>";
} else{
    mysqli_query($con,"INSERT INTO users(Username,Email,lname,Password) VALUES('$username','$email','$age','$password')") or die("Erro occureded");
    echo "<div class='message'><p> Registration successfully!</p></div><br>";
    echo "<a href='index.php'><button class='btn'>Login Now</button></a>";
}
} else{
     ?>
            <header>sign_up</header>
            <form action="" method="post">
               <div class="field input">
                <label for="username"><span>Username</span></label><br>
                <input type="text" name="username" id="username"autocomplete="off"  required>
               </div>
               <div class="field input">
                <label for="email"><span>Email</span></label><br>
                <input type="text" name="email" id="email" autocomplete="off"  required>
               </div>
               <div class="field input">
                <label for="age">Lname<span></span></label><br>
                <input type="text" name="age" id="age" autocomplete="off" required>
               </div>
               <div class="field input">
                <label for="password"><span>Password</span></label><br>
                <input type="password" name="password" id="password" autocomplete="off" required>
                
               </div>
               <div class="field">
                <input type="submit" class="btn" name="submit" value="login" required>
               </div> 
               <div class="links">
                Aready a memeber? <a href="index.php">sign_in</a>
               </div>
            </form>
        </div>
        <?php
        }
        ?>
    </div>
</body>
</html>