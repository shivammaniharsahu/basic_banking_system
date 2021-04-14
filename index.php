<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">   
    <title>Basic Banking System</title>
    <link rel="stylesheet" type="text/css" href="css/heading.css">
    
    <!-- stlye of fiew components -->
    <style>
        .main {
          padding: 16px;
          margin-top: 30px;
          height: 1500px; /* Used in this example to enable scrolling */
        }
      
      .btn-ultra-voilet {
          background: #654ea3;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #eaafc8, #654ea3);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #eaafc8, #654ea3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color: #fff;
          border: 3px solid #eee;
      }

      .btn-light-moon {
          background: #FFEFBA;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color: #000;
          border: 3px solid #eee;
      }

      .btn-funky-moon {
          background: #A770EF;  /* fallback for old browsers */
          background: -webkit-linear-gradient(145deg, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(145deg, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color: #fff;
          border: 3px solid #eee;
      }
      .btn-orange-moon {
          background: #fc4a1a;  /* fallback for old browsers */
          background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);  /* Chrome 10-25, Safari 5.1-6 */
          background: linear-gradient(to right, #f7b733, #fc4a1a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color: #fff;
          border: 3px solid #eee;
      }

      .btn-rounded {
          border-radius: 35px;
      }

        .btn-cool-blues {
            background: #2193b0;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 3px solid #eee;
        }
      .btn-fab {
          height: 50px;
          width: 53px;
          border-radius: 50%;
      }
    </style>
  </head>

  <body >
<!-- bootstrap navbar -->
  <nav  class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid"  >
    <a class="navbar-brand" style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;"  href="index.php">The Spark Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul  class="navbar-nav">
     
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfermoney.php">Transaction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionhistory.php">Transaction History</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="createuser.php">Create User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- end of navbar -->
      <br>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div style="text-align:center" class="col-sm-4 col-lg-6 col-lg-6">
                    
                    <h1 style="text-shadow: 0 0 3px #FF0000;">
                    WELCOME TO <br>SPARKS BANK<br>
                    </h1>              
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank18.jpg" class="img-fluid pt-2">
              </div>
            </div>
 
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/createuser.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button class="col btn btn-ultra-voilet btn-rounded">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/t9.png" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button class="col btn btn-cool-blues btn-rounded">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/h10.png" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button class="col btn btn-orange-moon btn-rounded">Transaction History</button></a>
                  </div>
            </div>
      </div>

      <!-- footer section -->
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <br>SHIVAM MANIHAR SAHU <br> The Sparks Foundation</p>
      </footer>

      <!-- script tags -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    </body>
</html>