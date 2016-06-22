<?php
require_once "../config.php";
function header($head_name, $header_name){

    echo "<meta charset=\"utf-8\">";
    echo "<meta http-equiv=\"cache-control\" content=\"no-cache\" />";
    echo "<title>$head_name | $header_name</title>";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
    echo "<link rel=\"icon\" type=\"image/png\" href=\"/img/logo/favicon/logo.png\">";
    echo "<link rel=\"stylesheet\" href=\"https://luca-kiebel.de/css/bootstrap.min.css\">";
    echo "<link rel=\"stylesheet\" href=\"../../css/main.css.php\">";
        if(isset($css_own_link)){
            echo "<link rel=\"stylesheet\" href=\"$css_own_link\">";
        }

        if(isset($js_own_link)){
            echo "<script src=\"$js_own_link\"></script>";
        }
    echo "<script src=\"https://luca-kiebel.de/js/jquery.min.js\"></script>";
    echo "<script src=\"https://luca-kiebel.de/js/bootstrap.min.js\"></script>";
    echo "<script src=\"/js/app.js\" charset=\"utf-8\"></script>";
}