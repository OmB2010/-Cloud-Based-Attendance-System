<?php
require_once('partials/_dbconnect.php');
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
else{
    header("location: login.php");
}

$sql = "select * from student_info where sname ='$username'";
$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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

    .contain{
    text-align: center;
    padding: 50px;
    padding-right:70px;
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background for the container */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.2); /* Box shadow for a subtle depth effect */
    }
        h1 {
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        .student-info {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            table-layout: fixed;
            width: 100%;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 10px 20px;
            margin-top:20px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .ab{
            background-color:#FFFDD0;
        border-radius:10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .cc{
            border: 1px solid #000;
            border-radius:10px;
            
        }
    </style>
</head>
<body>
    <div class="contain">
        <h1 class="ab">Student Dashboard</h1>
        <div class="student-info">
            <h2>Welcome, <?php echo "$username" ?></h2>
            <?php
            $sql2 = "select sid from student_info where sname ='$username'";
            $result2 = mysqli_query($conn,$sql2);

            $row = mysqli_fetch_assoc($result);
            
            if(!$row){
                $user_id="ID not yet assigned";
            }  
            else{
                $user_id = $row["sid"];
            } 

            ?>
            <p>Student ID: <?php echo "$user_id" ?></p>
        </div>
        
        <table>
            <h2 class="cc"> Attendance Sheet </h2>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <td> <?php echo $row['subject']; ?> </td>
                        <td> <?php echo $row['attendance']; ?> </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
        <div class="container">
            <a href="login.php" >
                <button class="btn">Logout</button>
            </a>
        </div>
    </div>
</body>
</html>
