<?php

// Check if the "remember_user" cookie is set
if (isset($_COOKIE['remember_user'])) {
  // TODO: Authenticate the user using the cookie value
  // ...

  // If the user is authenticated, redirect to the dashboard
  header('Location: dashboard.php');
  exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Page</title>
    <!-- CSS Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title text-center">Home Page</h3>
              <p class="card-text">Welcome to the home page!</p>
              <a href="index.php" class="btn btn-primary btn-block">Log out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>