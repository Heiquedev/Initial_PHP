<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["name"] == "admin" && $_POST["password"] == "123" ) {
    echo "Congratulations, your login was successful!";
};

?>