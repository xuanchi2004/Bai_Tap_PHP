<?php
if($_GET ["number-a"] && $_GET ["number-b"]) {
    echo "Tong: " . $_GET["number-a"] + $_GET["number-b"];
    echo '<br>';
    echo "Hieu: " . $_GET["number-a"] - $_GET["number-b"];
    echo '<br>';
    echo "Tich: " . $_GET["number-a"] * $_GET["number-b"];
    echo '<br>';
    echo "Thuong :" . $_GET["number-a"] / $_GET["number-b"];
}

?>