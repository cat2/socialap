<?php



# Load bootstrap to apply configuration
include("config/bootstrap.php");


# Route request to desired controller
switch ($_GET["q"]) {

    case "home":
        include( APP_CONTROLLER . "/homeController.php");
        break;
    case "auth":
        include( APP_CONTROLLER . "/authController.php");
        break;

    default:
        include( APP_CONTROLLER . "/homeController.php");
        break;
}