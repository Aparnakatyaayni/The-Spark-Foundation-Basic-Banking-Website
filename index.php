
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sparks Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Basic Banking System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    body{
      background: lightgray;
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; 
      height: 500px;
    }

    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="createaccount.php">Create Account</a></li>
        <li><a href="transaction.php">Transfer Money</a></li>
        <li><a href="transactionhistory.php">Transaction History</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/Bankimg.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>WELCOME!</h3>
            <h1>To Sparks Bank.</h1>
          </div>      
        </div>

        <div class="item">
          <img src="img/bank2.jpg" alt="Image">
          <div class="carousel-caption">
            <h3>Thank you for choosing us!</h3>
            <p></p>
          </div>      
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      
    <img src="img/user1.png" class="img-fluid" width="250" height="200">
    <br>
    <a href="createaccount.php"><button>Create an account</button></a>
    </div>
    <div class="well">
    <img src="img/transfer1.png" class="img-fluid" width="250" height="200">
      <br>
     <a href="tranaction.php"><button>Make a Transaction</button></a>
          

    </div>
    <div class="well">
    <div class="col-md act">
                    <img src="img/history.png" class="img-fluid" width="250" height="200">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
    </div>
  </div>
</div>
<hr>
</div>




<footer class="container-fluid text-center">
<p>&copy 2021. Made by <b>APARNA KATYAAYNI</b> <br></p>
</footer>

</body>
</html>
