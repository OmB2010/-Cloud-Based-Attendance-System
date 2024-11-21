<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $showalert = false;
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $exists = false;

    if($exists == false ){
        $sql = "INSERT INTO `users` (`username`, `password`, `role`, `dt`)
        VALUES ('$username', '$password', '$role', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showalert = true;
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
       body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #fffff4; 
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
            padding-left:20px;
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
            padding-right:20px;
        }
        select {
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
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .contain{
            margin-top:20px;
        }
        .logo{
            padding-left:20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <div class='logo'>
            <img src="https://o.remove.bg/downloads/22877aee-6f29-40f0-9043-5583809166db/images-removebg-preview.png" alt="MIT ADT LOGO">
        </div>  
        <form action="signup.php" method="post">
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
                    <option value="teacher">Teacher</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <button type="submit" class="btn">Create Account</button>
        </form>
        <div class="contain">
            <a href="index.php" >
                <button class="btn">Go Back</button>
            </a>
        </div>
    </div>
</body>
</html>
