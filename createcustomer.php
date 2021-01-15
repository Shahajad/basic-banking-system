<?php
include 'config.php';
if(isset($_POST['createsubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    if($balance<0){
        echo '<script type="text/javascript">';
        echo 'alert("Oops! Balance can not be negative")';
        echo '</script>';
    }
    $sql = "INSERT INTO users (name, email, balance) VALUES ('$name', '$email', $balance)";
    $query = mysqli_query($conn, $sql);

    if($query){
    echo '<script type="text/javascript">';
    echo 'let x = "User Created Successfully";';
    echo 'alert(x);';
    echo '</script>';}
    echo '<script language="javascript">window.location = "createcustomer.php";</script>';}
?>

<!doctype html>
<style>
form {
  /* Center the form on the page */
  margin: 0 auto;
  margin-top:2rem;
  width: 500px;
  /* Form outline */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}

label {
  display: inline-block;
  width: 90px;
  text-align: right;
}

input,
textarea {
  font: 1em sans-serif;
  width: 300px;
  box-sizing: border-box;
  border: 1px solid #999;
}

.button {
  padding-left: 90px; 
}

button {
  /* This extra margin represent roughly the same space as the space
     between the labels and their text fields */
  margin-left: .5em;
}
</style>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Basic Banking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    </head>
    
    <body>
    <?php
    include 'navbar.php';?>
    <h2 class="text-center pt-4">Create New Customer</h2>
    
    <div>
        <form method="post" id="userCreation">
    <ul>
  <li>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
  </li>
  <li>
    <label for="mail">E-mail:</label>
    <input type="email" id="mail" name="email">
  </li>
  <li>  
    <label for="balance">Balance:</label>
    <input type="number" id="balance" name="balance">
  </li>
  <li class="button">
  <button type="submit" name="createsubmit">Create Customer</button>
</li>
 </ul>
</form>
    
    <footer class="text-center mt-5 py-2">
    <p>At your service. On your side. <b>The Dream Bank</b> is always with you. </p>
    </footer>
     
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>