<?php
require_once('partials/_dbconnect.php');
$sql = "select * from student_info";
$result = mysqli_query($conn,$sql);


if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/_dbconnect.php';
    $sid = $_POST["student-id"];
    $sname = $_POST["student-name"];
    $subject = $_POST["subject-name"];
    $attendance = $_POST["attendance"];

    $exists = false;

    if($exists == false ){
        $sql2 = "INSERT INTO `student_info` (`sid`, `sname`, `subject`, `attendance`)
         VALUES ('$sid', '$sname', '$subject', '$attendance');";
        $result2 = mysqli_query($conn, $sql2);
        if($result2){
            $showalert = true;
        }
        header("location: teacher_dashboard.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
<style>
    body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #fffff4 ; /* Background color of the page */
    font-family: Arial, sans-serif;
    color: black; /* Text color */
}

.container {
    text-align: center;
    padding: 40px;
    background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent background for the container */
    border-radius: 10px; /* Rounded corners for the container */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Box shadow for a subtle depth effect */
}

h1 {
    font-size: 36px;
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
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 40px; /* Add space between table and form */
        background-color:#add8e6;
    }
    th, td {
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        
    }
    th {
        background-color: #f2f2f2;
    }
    form {
        margin-top: 20px;
        padding: 20px; /* Add padding to the form */
        border: 1px solid #000; /* Add a border around the form */
        
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
    }
    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-top:10px;
        border-radius: 10px;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    h2{
        text-align: center;
    }
    #attendance-form{
        padding:40px;
        background-color:white;
       margin-left:0;
       padding-right: 50px;
    }
    #aa{
        
        background-color:#FFFDD0;
        border-radius:10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    #bb{
        font-weight:bold;
    }
    img{
        height: 150px;
        width:300px;
    }
    
</style>
</head>
<body>
    
    <div class="container">
        <h1 id="aa">Teacher Dashboard</h1>
        <img src="https://o.remove.bg/downloads/ece6ebbd-feb2-47a6-b147-4a0ad62eadd4/MITADT-removebg-preview.png" alt="bg">
        <table>
            <h2 id="bb">Student Info</h2>
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <td> <?php echo $row['sid']; ?> </td>
                    <td> <?php echo $row['sname']; ?> </td>
                    <td> <?php echo $row['subject']; ?> </td>
                    <td> <?php echo $row['attendance']; ?> </td>

                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        
        <form id="attendance-form" action="teacher_dashboard.php" method="post">
            <h2>Attendance Input</h2>
    
            <label for="student-id">Student ID:</label>
            <input type="text" id="student-id" name="student-id" required>
            
            <label for="student-name">Student Name:</label>
            <input type="text" id="student-name" name="student-name" required>

            <label for="subject-name">Subject Name:</label>
            <input type="text" id="subject-name" name="subject-name" required>

            <label for="attendance">Attendance:</label>
            <input type="text" id="attendance" name="attendance" required>

            <input type="submit" value="Submit">
        </form>
        <div class="container">
            <a href="login.php" >
                <button class="btn">Logout</button>
            </a>
        </div>
    </div>
</body>
</html>
