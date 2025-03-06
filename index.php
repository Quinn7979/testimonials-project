<?php
require_once("initialize.php");
?>

<html>
    <h1>testimonials</h1>
    <ul name="testimonials-list">
        <?php
        $sql = "SELECT feedback, rating FROM testimonials";
        $result_set = mysqli_query($connection, $sql);
        while($result = mysqli_fetch_assoc($result_set)){
            echo "<li>";
            echo $result["feedback"], ' ', $result["rating"], '/5';
            echo"</li>";
        }
       
        ?>
    </ul>

</html>