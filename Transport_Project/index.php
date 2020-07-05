<?php
    if(isset($_POST['name'])){

    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database failed due to ".mysqli_connect_error());
    }



    //echo "sucessfully connected to db";


    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    $desc=$_POST['desc'];
/*
    $sql="INSERT INTO `doontravel'.'trip1`( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
    ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
  */  
    $sql="INSERT INTO 'tr'.`tr` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
    ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    echo $sql;

    if($con->query($sql) == true){
        echo " Sucessfully inserted ";
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title> 
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bangers&family=Fondamento:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="GEHU DehraDoon">
    <div class="container">
        <h1>Welcome to DOON Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>

        <p class="submit-msg">Thanks for submiting your form we are happy you join us..</p>

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="enter your name ">
            <input type="number" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="select gender">
            <input type="email" name="email" id="email" placeholder="enter email address">
            <input type="phone" name="phone" id="phone" placeholder="enter phone number">
            <textarea name="desc" id="desc" cols="30" rows="5" placeholder="enter any other information here"></textarea>
            <button class="btn">Submit</button>
            
        </form>
    
    </div>


    <script src="index.js">    </script>

 
</body>
</html>