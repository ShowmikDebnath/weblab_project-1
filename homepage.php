<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <title>DSA</title>
  <style>
    
    body {
      background-color: #f8f9fa;
    }

    .header {
      
      background-color: #000;
      padding: 10px;
      color: #fff;
    }

    .header img {
      height: 50px;
    }

    .nav-link {
      color: #fff !important;
      margin-right: 15px;
    }

    .background-img {
      background-image: url('img/background.jpg');
      background-size: cover;
      background-position: center;
      height: 400px;
    }

    .category {
      padding: 50px 0;
      text-align: center;
    }

    .category h3 {
      margin-bottom: 30px;
    }

    .category a {
      display: block;
      padding: 20px;
      background-color: #fff;
      color: #333;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .category a:hover {
      background-color: #f8f9fa;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Header section -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="img/logo.jpg" alt="Logo">
        </div>
        <div class="col">
          <nav class="navbar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              
              <li>
                <?php echo "<br><a href='logout.php'><input type='button' class='btn btn-danger' value='logout' name='logout'></a>"; ?>
              </li>
              
              
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Background image section -->
  <div class="background-img"></div>

  <!-- Category section -->
  <section class="category">
    <div class="container">
      <h3>Select a Data Structure Topic:</h3>
      <a href="https://showmikdebnath.github.io/DSA_blog/array.html" target=”_blank”>Array</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/Linklist.html">Linked List</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/Stack.html">Stack</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/Queue.html">Queue</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/dijkstra.html" target=”_blank”>Dijkastra Algorithm</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/greedy.html" target=”_blank”>Greedy Algorithm</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/graph.html" target=”_blank”>Graph</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/dynamicProgramming.html" target=”_blank”>Dynamic Programing</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/Sorting.html" target=”_blank”>Sorting DSA</a>
      <a href="https://showmikdebnath.github.io/DSA_blog/Binary%20Search%20Tree.html" target=”_blank”>Binary Search Algorithm</a>
      <!-- Add more categories as needed -->
    </div>
  </section>

  <!-- Footer section -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2023 Showmik Debnath-DSA. All rights reserved.</p>
    </div>
    </footer>
  </div>
</body>
</html>
