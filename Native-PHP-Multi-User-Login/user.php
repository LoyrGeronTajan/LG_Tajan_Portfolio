<?php
  session_start();
  include 'includes/header.php';
  if(!isset($_SESSION['user_name']))
  {
    header('Location:login.php');
  }
?>
<head>
  <title>User Page</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/skills-logo/favicon//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/skills-logo/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/skills-logo/favicon//favicon-16x16.png">
    <link rel="manifest" href="../assets/images/skills-logo/favicon//site.webmanifest">
    <link rel="mask-icon" href="../assets/images/skills-logo/favicon//safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head> 

<section>
    <div class="container">
      <div class="card">
        <div class="card-header text-white" style="background-color: #1f2044;">
          <h3>THIS IS USER PAGE</h3>
        </div>
        <div class="card-body">
          <h3>Welcome <span> <?php echo $_SESSION['user_name']?> </span></h3>
          <form action="logout.php" method="post">
            <button type="submit" class="btn btn-sm btn-danger">Logout</button>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
  include 'includes/footer.php';
?>