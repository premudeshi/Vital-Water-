<?php require "login/loginheader.php"; ?>


<html>
<title>Vital Water</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <img src="images/logo2.png" alt="Vital Water" style="width:75px;height:75px;">
  <a class="navbar-brand" href="#">Vital Water</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li >
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="recharge.php">Recharge <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Support</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login/logout.php">Log Out</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</html>


<?php







if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ammount = test_input($_POST["ammount"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$lp = 500;

?>







<html>

<div class="container">
<center><h2>Confirm Payment</h2></center>
<form action="rechargecomplete.php" method="post">
<center><p>You have decided to pay <?php echo $ammount;?> TSH.  </p> <br>
<p>You will get approximatly <?php echo $ammount/$lp;?> Liters.</p>
<center>Cardnumber: <input type="number" name="cardnumber"></center><br>
<center><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Confirm and Pay</button></center>
<input type="checkbox" name="ammount" value="<?php echo $ammount;?>">Confirm Payment<br>

</center>
</form>
</div>
</html>