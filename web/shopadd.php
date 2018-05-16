<?php
$_SESSION["original"] = 0;
$_SESSION["derivative"] = 0;
$_SESSION["edge"] = 0;

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add1':
            alert("hiela");
            break;
        case 'add2':
            add2();
            break;
        case 'add3':
            add3();
            break;
    }
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function add2() {
    echo "The insert function is called.";
    exit;
}

function add3() {
    echo "The lol function is called.";
    exit;
}

include 'shop.php'
?>