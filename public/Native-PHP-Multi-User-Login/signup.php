<?php
  include 'connection.php';
  if(isset($_POST['btn-submit-signup']))
  {
    // echo 'register';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpass']);
    $user_type = $_POST['role'];
 
    $select = " SELECT * FROM multi_user_tbl WHERE email = '$email' ";
 
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'Email already exist!';
 
    }else{
       if($pass != $cpass){
          $error[] = 'password not matched!';
       }else{
          $insert = "INSERT INTO multi_user_tbl(role, name, email, password) VALUES('$user_type','$name','$email','$pass')";
          mysqli_query($conn, $insert);
          header('location:login.php');
          exit();
       }
    }
    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $pass = md5($_POST['password']);
    // $cpass = md5($_POST['cpass']);
    // $role = $_POST['role'];

    // $query = "SELECT * FROM multi_user_tbl WHERE email = '$email' AND password = '$pass'";
    // $query_run = mysqli_query($conn,$query);

    // if(mysqli_num_rows($query_run) > 0)
    // {
    //   $err[] = 'User already exist';
    // } 
    // else 
    // {
     
    //   if($pass !== $cpass)
    //   {
    //     $err[] = 'Password not matched';
    //   }
    //   else 
    //   {
    //     $query = "INSERT INTO multi_user_tbl (role,name,email,password) 
    //               VALUES ('$role','$name','$email','$pass')";
    //     mysqli_query($conn, $query);
    //     header('Location:login.php');
    //   }
    // }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-UserLogin</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/skills-logo/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/skills-logo/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/skills-logo/favicon//favicon-16x16.png">
    <link rel="manifest" href="../assets/images/skills-logo/favicon//site.webmanifest">
    <link rel="mask-icon" href="../assets/images/skills-logo/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  <section>
    <div class="container">
      <div class="card">
        <div class="card-header text-white" style="background-color: #1f2044;">
          <h3>Multi User Role Signup</h3>
        </div>
        <div class="card-body">
          <?php
            if (isset($error)) {
              foreach($error as $msg) :
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  '.$msg.'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
              endforeach;
            }
          ?>
          <form action="" method="post">
            <div class="form-group mb-3">
            <select name="role" class="form-select" aria-label=".form-select-sm example" required>
                <option selected>Choose Role...</option>
                <option value="ADMIN">Admin</option>
                <option value="USER">User</option>
              </select>
            </div>
            
            <div class="form-group mb-3">
              <input type="text" name="name" class="form-control" placeholder="Enter Name" required />
            </div>
            <div class="form-group mb-3">
              <input type="email" name="email" class="form-control" placeholder="Enter Email" required />
            </div>
           

            <div class="form-group mb-3">
              <input type="password" name="password" minlength="8" class="form-control" placeholder="Enter Password" required/>
            </div>

            <div class="form-group mb-3">
              <input type="password" name="cpass" minlength="8" class="form-control" placeholder="Confirm Password" required/>       
            </div>


              <div class="float-end">
                <a href="login.php">
                  <button type="button" class="btn btn-sm btn-info text-white">
                    Cancel
                  </button>
                </a>
                      
                <button type="submit" name="btn-submit-signup" class="btn btn-sm btn-success">
                  Submit
                </button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  


  <!-- Bootstrap Script -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <!-- JavaScript -->
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
</body>
</html>