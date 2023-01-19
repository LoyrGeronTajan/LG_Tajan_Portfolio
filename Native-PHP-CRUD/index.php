<?php
  include 'connection.php';

// Create Data
if(isset($_POST['btn-save']))
{
  // echo "save";
  $fname = $_POST['fname'];
  $address = $_POST['address'];
  $email = $_POST['email'];

  $query = "INSERT INTO info_tbl (info_fname, info_address, info_email) 
            VALUES('$fname', '$address', '$email');";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    // echo 'success';
    header("Location: index.php");
  } else {
    echo 'failed';
  }
}

// Update Data
if (isset($_POST['btn-update-save'])) {
  // echo 'save';
  $update_id = $_POST['update_id'];
  $update_fname = $_POST['update_fname'];
  $update_address = $_POST['update_address'];
  $update_email = $_POST['update_email'];

  $query = "UPDATE info_tbl SET
            info_fname='$update_fname',
            info_address='$update_address',
            info_email='$update_email'
            WHERE id = '$update_id'
            ";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    // echo 'success';
    header("Location: index.php");
  } else {
    echo 'failed';
  }
}

// Delete Data
if(isset($_POST['btn-delete-info']))
{
  // echo "save";
  $deleteID = $_POST['deleteID'];
  

  $query = "DELETE FROM info_tbl WHERE id = '$deleteID'";
            $query_run = mysqli_query($conn,$query);

  if ($query_run) {
    header("Location: index.php");
  } else {
    echo 'failed';
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Crud</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/skills-logo/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/skills-logo/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/skills-logo/favicon//favicon-16x16.png">
    <link rel="manifest" href="../assets/images/skills-logo/favicon//site.webmanifest">
    <link rel="mask-icon" href="../assets/images/skills-logo/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>

  <section>
    <div class="container">
      <div class="card">
        <header class="text-center text-white" style="background-color: #1f2044;">
          <h1>NATIVE PHP CRUD </h1>
        </header>
        <div class="card-body">
          <div class="row">
            
            <!-- REGISTER EMPLOYEE -->
            <div class="col-md-4 col-sm-12">
              <div class="card">
                <div class="card-header text-white text-center" style="background-color:#1f2044">
                  <h4>REGISTER EMPLOYEE</h4>
                </div>
                <div class="card-body">
                  <form id="add-form" action="" method="POST">
                    <div class="form-group mb-3">
                      <label for="" class="form-label">Fullname:</label>
                      <input type="text" name="fname" class="form-control inputField" id="fullname">
                    </div>

                    <div class="form-group mb-3">
                      <label for="" class="form-label">Address:</label>
                      <input type="text" name="address" class="form-control inputField" id="position">
                    </div>

                    <div class="form-group mb-3">
                      <label for="" class="form-label">Email:</label>
                      <input type="email" name="email" class="form-control inputField" id="position">
                    </div>

                    <div class="float-end">
                      <button type="submit" name="btn-save" class="btn btn-sm btn-success">
                        <i class="fas fa-check"></i> Register
                      </button>

                      <button class="btn btn-sm btn-danger" onclick="document.getElementById('add-form').reset()">
                      <i class="fas fa-times"></i> Clear
                      </button>
                    </div>
                  </form>
                </div>
              </div>

            </div>

            
            <!-- INFORMATION TABLE -->
            <div class="col-md-8 col-sm-12">
              <div class="card">
                <div class="card-header text-white text-center" style="background-color:#1f2044">
                  <h4>INFORMATION TABLE</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive" style="max-height: 289px">
                    <table class="table table-bordered ">
                      <thead class="table-active">
                        <tr class="text-uppercase text-center">
                          <th>id</th>
                          <th>Fullname</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody >
                        <?php
                          include 'connection.php';

                          $query = "SELECT * FROM info_tbl";
                          $query_run = mysqli_query($conn, $query);

                          if(mysqli_fetch_array($query_run) > 0)
                          {
                            foreach($query_run as $row) :
                              // echo $row['info_fname'];
                            ?>
                            <tr class="text-center overflow-auto">
                              <td><?= $row['id']?></td>
                              <td><?= $row['info_fname']?></td>
                              <td><?= $row['info_address']?></td>
                              <td><?= $row['info_email']?></td>
                              <td>
                                  <button 
                                    type="submit"
                                    name="btn-update"
                                    class="btn btn-sm btn-info text-dark"
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalUpdate<?php echo $row['id']?>">
                                  <i class="fas fa-pencil-alt"></i>
                                  </button> 
                              </td>
                              <td>
                                  <button
                                    type="submit" 
                                    name="btn-delete1"
                                    class="btn btn-sm btn-danger text-white" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#modalDelete<?php echo $row['id']?>">
                                    <i class="fas fa-trash"></i>
                                  </button>

                                
                              </td>
                            </tr>
                            <?php
                            endforeach;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  include 'connection.php';
  $result = mysqli_query($conn, 'Select * from info_tbl');
  while ($data = mysqli_fetch_array($result))
  {
    include 'modals.php';
  }
?>


  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>