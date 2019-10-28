<html>
<head>


<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
</head>
<body>
  <h1>Feedback</h1>
  <h3>Please provide your feedback below</h3> <br><br>
  <h3>How do you rate your overall experience</h3><br>
<div id="myForm">
<form id="second_form" method="post" action="">
<div>
<input type="radio" name="radiobtn" value="Bad"> Bad
<input type="radio" name="radiobtn" value="Average"> Average
<input type="radio" name="radiobtn" value="Good"> Good
</div>
  <div>
    <label for="fname">Comments:</label><br>
    <input type="textarea" id="comments" name="comments"></input><br>
  </div>
  <div>
    <fieldset>
      <legend>Your Name:</legend>
    <input type="text" id="name" name="name"></input>
  </fieldset>
  </div>
  <div>
    <fieldset>
      <legend>Email:</legend>
    <input type="email" id="mail" name="mail"></input>
  </fieldset>
  </div>
  <div>
    <input type="submit" value="Post" id="sub"  />
  </div>
</form>
</div>
<style>
#myForm{
      height:400;
      width:300;
}
#sub{
      height:40;
      width:300;
}
#sub{
      height:80;
      
}
</style>
<?php
$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "feedback";

$review = $_POST['radiobtn'];
$comments = $_POST['comments'];
$name = $_POST['name'];
$email = $_POST['mail'];
$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
  die("connection falied" .mysqli_connect_error());
}

$sql ="INSERT INTO feed(review,comments,name,email) values('$review','$comments','$name','$email')";

if(mysqli_query($conn,$sql))
{
  echo "Record inserted succesfully";
}
else
{
  echo "Error :" . mysqli_error($conn);

}
mysqli_close($conn);
?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Review</th>
        <th>Comments</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
$host = "127.0.0.1";
$dbusername = "root";
$dbpassword = "";
$dbname = "feedback";

$review = $_POST['radiobtn'];
$comments = $_POST['comments'];
$name = $_POST['name'];
$email = $_POST['mail'];
$conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
  die("connection falied" .mysqli_connect_error());
}

$sql ="SELECT * FROM feed";

$fire = mysqli_query($conn,$sql);
if(mysqli_num_rows($fire)>0)
{
  while($user = mysqli_fetch_assoc($fire)){ ?>

    <tr>
      <td><?php echo $user['review']?></td>
      <td><?php echo $user['comments']?></td>
      <td><?php echo $user['name']?></td>
      <td><?php echo $user['email']?></td>
    </tr>
  <?php } } mysqli_close($conn); ?>
    </tbody>
  </table>

</body>
</html>