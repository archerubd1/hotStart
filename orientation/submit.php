<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // (Optional) Process form data here

    // Redirect to question page
    header("Location: questions.php");
    exit();

}

?>