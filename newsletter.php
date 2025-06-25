<?php 
$conn = mysqli_connect('localhost:3307','root','','website');
    if(isset($_POST['signup']))
    {
        $email = $_POST['email'];
            $sql = "insert into newsletter (email) values ('$email')";
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