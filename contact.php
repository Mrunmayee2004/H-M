<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$conn = mysqli_connect('localhost:3307','root','','website');
    if(isset($_POST['submit']))
    {
            $sql = "insert into contact (name,email,subject,message) values ('$name','$email','$subject','$message')";
            if (mysqli_query($conn,$sql))
            {
                header("Location:conclude.html");
            }
            else
            {
            echo "Unable to insert user data";
            }
        }
?>