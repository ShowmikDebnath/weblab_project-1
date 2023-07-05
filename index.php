<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" integrity="sha512-NK8m6a9+pCkXH4r7n3/vOUL00Jf9tbCFSSsAxDhBgsL5VbuTJqOwNlUDjSXwmsuSl+gZnntbPESj+YxI6bGQ4Q==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    
    body {
      height: 100vh;
      background-image: url('img/welcomeImg3.jpg');
      color: rgba(255, 0, 0, 0.2);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    p{
      color: yellow;
    }
    .welcome-text {
        color: #fff;
        text-align: center;
        padding-top: 10%;
    }
    .welcome-text h1 {
        font-size: 4rem;
        margin-bottom: 10rem;
    }
    .btn-primary, .btn-outline-primary {
        margin-right: 1rem;
    }
    @media (max-width: 768px) {
        .welcome-text h1 {
            font-size: 2.5rem;
        }
    }
  </style>
</head>
<body>
  <div class="container-fluid h-100">
    <div class="row h-100 align-items-center">
      <div class="col-md-8 mx-auto welcome-text">
        <h1>Welcome to DSA-learning platform</h1>
        <p><b>To join our platform, Please Register first!</b></p>
        <p>Happy Learning</p>
        
        <div>
          
          <a href="login.php" class="btn btn-light">LogIn</a>
          <a href="register.php" class="btn btn-success">Join our Platform</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.min.js" integrity="sha512-vilQ+Kt2p6u7mNlX+G9JLwr4/24TrdV1zOvR3MgC8d2M/JSlCyNmpHFL+NhJqI5E/R/jZvUyIJ/B5aEeZn0bWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
