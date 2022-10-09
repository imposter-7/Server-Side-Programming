<?php // sqltest.php
//   require_once 'login.php';
    $hn="localhost";
    $un="id17774795_publications_user";
    $pw="Haloosh@2000";
    $db="id17774795_publications";
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

  if (isset($_POST['deletedata']))
  {
    $id=$_POST['product_id'];
    $sql="DELETE from Productdb WHERE id= $id";
    
    if(mysqli_query($conn,$sql))
    {
        echo "<script> alert(\"Removed ! \") </script>";
    }
    else
    {
        echo "<script> alert(\"ERROR ! \") </script>";
    }
  }
  
  echo "<script>window.location=\"../admin.php\";</script>"
  
?>