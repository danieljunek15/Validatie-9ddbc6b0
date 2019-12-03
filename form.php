<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title> Email box. </title>
</head>
<body>


<form action="" method="post" class="form-example">
    <div class="form-example">
        <label for="email">Enter your email:
        </label> 
        <input name="email" type="email" placeholder="Voer hier nu je email in pipo!" id="email" 
        required>
    </div>
    <div class="form-example">
        <input type="submit" value="Verstuur pipo!">
    </div>
</form>

<?php

if (isset($_POST["email"])) {
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "E-mailadres is geldig!";
    } else {
        echo "E-mail is ongeldig!";
    }
}

?>

</body>
</html>