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

    <form action="create.php" method="POST">
        <label for="feedback">Feedback:</label>
        <input name="feedback" type="text">
        <label for="rating">Rating:</label>
        <input name="rating" type="number" min="0" max="5">
        
        <input type="submit">
    </form>

</html>