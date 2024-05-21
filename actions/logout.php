<?php

require_once '../utils/db_utils.php';

if (isset($_POST['logout'])) {
    unset($_POST['logout']);
    logout();
} else {
    header("Location: ../index.php");
}