<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $showprompt = "";
    $showalert = false;
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    if($role == "student"){
        $sql = "select * from users where username='$username' AND password='$password' AND role='$role'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if($num == 1){
            session_start();
            $_SESSION['username'] = "$username";
            header("location: student_dashboard.php");
        }
        else{
            $showprompt = "Invalid Credentials";
            $showalert = true;
        }
    }

    elseif($role == "teacher"){
        $sql = "select * from users where username='$username' AND password='$password' AND role='$role'";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        if($num == 1){
            header("location: teacher_dashboard.php");
        }
        else{
            $showprompt = "Invalid Credentials";
            $showalert = true;
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #fffff4; /* Background color of the page */
    font-family: Arial, sans-serif;
    color: #black; /* Text color */
}

.container {
    text-align: center;
    padding: 50px;
    padding-right:70px;
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background for the container */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Box shadow for a subtle depth effect */
}
        h1 {
            color: #333;
        }
        .form-group {
            margin: 10px auto;
            width: 300px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            width:200px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .logo{
            padding: 0;
            margin: 0;   
            padding-left:20px;
        }
        .contain{
            margin-top:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <div class='logo'>
            <img src="https://o.remove.bg/downloads/22877aee-6f29-40f0-9043-5583809166db/images-removebg-preview.png" alt="MIT ADT LOGO">
        </div>   
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="contain">
            <a href="index.php" >
                <button class="btn">Go Back</button>
            </a>
        </div>
    </div>

</body>
</html>
