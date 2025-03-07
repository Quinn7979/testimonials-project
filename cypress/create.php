<html>

<?php
require_once("initialize.php");

$feedback = $_POST["feedback"];
$rating = $_POST["rating"];

$sql = "INSERT INTO testimonials (feedback, rating) values (\"$feedback\", \"$rating\")";

$result = mysqli_query($connection, $sql);

if($result){
    echo "<h2>Testimonial Created!</h2>";
}else{
    echo "<h3>Error! Testimonial not created.</h3>";
}
?>

<a href="index.php">Return to Testimonials</a>

</html>