<!DOCTYPE html>
<html>
<head>
    <title>Cloud-Based Attendance System</title>
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
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background for the container */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Box shadow for a subtle depth effect */
}

h1 {
    font-size: 36px;
    padding:10px;
    background-color:#FFFDD0;
    border-radius:5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

img {
    max-width: 100%; /* Ensure the image resizes to fit the container */
    height: auto; /* Maintain aspect ratio */
}

p {
    font-size: 18px;
    margin: 20px 0;
}

button {
    padding: 10px 20px;
    background-color: #e74c3c; /* Button background color */
    border: none;
    border-radius: 5px; /* Rounded corners for the button */
    color: #fff;
    cursor: pointer;
}

    button:hover {
           background-color: #c0392b; /* Button background color on hover */
        }

        h1 {
            color: #333;
        }
        .btn {
            display: inline-block;
            margin: 10px auto;
            padding: 10px 20px;
            width: 150px;
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

        .space{
            padding:20px;
        }
        p{
            font-size:13px;
            margin:0;
            padding:0;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h1>CLOUD BASED ATTENDANCE SYSTEM</h1>
        <img src="https://o.remove.bg/downloads/f93e69c0-c4a1-4c41-88ed-08a2078406d7/a6132a5cd55abcae190bc82567ca8a47-original-users-removebg-preview.png" alt="Users">
        <div class="space">
            <a href="login.php" class="btn">Login</a>
            <p>(Already Registered)</p>
        </div>
        <div>
            <a href="signup.php" class="btn">Sign-Up</a>
            <p>(Create New Account)</p>
        </div>
        
    </div>
</body>
</html>
