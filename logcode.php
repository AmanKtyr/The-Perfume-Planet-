<?php

session_start();
$email =$_POST["email"];
$password =$_POST["password"];

$con=mysqli_connect("localhost", "root", "", "perfumedb");
$query = "select password from regtbl where email='$email'";
$res = mysqli_query($con, $query);
if(mysqli_num_rows($res)>0)
{
  if($row=mysqli_fetch_assoc($res))
  {
        $respassword = $row["password"];
        if($password==$respassword)
        {
            $_SESSION["valid"] = $email;
            // header("location:dashboard.php");
            echo "<script> alert('your welcome we missed you'); 
            window.location.href='dashboard.php'; </script>";
        }
        else
        {
            echo "<script> alert ('Invalid User');
            window.loaction.href='login.php'; </script>";  
        }
  }
}
else
{
    echo "<script>
     alert('User does not Exist'); 
     window.location.href='login.php';
    </script>";
}

?>