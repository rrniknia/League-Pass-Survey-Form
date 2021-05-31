<?php
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $faveTeam = $_POST["faveTeam"];
    $games = $_POST["games"];
    $playoffs = $_POST["playoffs"];
    $comments = $_POST["comments"];
?>

<html>
    <body>
        Name: <?php echo $fullName; ?><br>
        Email: <?php echo $email; ?><br>
        Gender: <?php echo $gender; ?><br>
        Age: <?php echo $age; ?><br>
        Favorite Team: <?php echo $faveTeam; ?><br>
        # Of Games: <?php echo $games; ?><br>
        Playoff Teams: <?php echo $playoffs; ?><br>
        Comments: <?php echo $comments; ?><br>
    </body>
</html>