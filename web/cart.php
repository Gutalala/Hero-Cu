<?php
$_SESSION["original"] = 0;
$_SESSION["derivative"] = 0;
$_SESSION["edge"] = 0;

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add1':
            add1();
            break;
        case 'add2':
            add2();
            break;
        case 'add3':
            add3();
            break;
    }
}

function add1() {
    echo "The select function is called.";
    exit;
}

function add2() {
    echo "The insert function is called.";
    exit;
}

function add3() {
    echo "The lol function is called.";
    exit;
}
?>



<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YOUR SHOPPING CART</title>
  <link href="cartStyle.css" type="text/css" rel="stylesheet">
</head>

<body>
     <?php
    include 'header.php';
    ?>
      <div class="column col2">
          <ul class="productsName">
              <li> Original Suit </li>
              <li> Derivative Suit </li>
              <li> Edge Suit </li>     
          </ul>
      </div>          
      <div class="column col3">
        <ul class="products">
          <form id="form2">
          <li><input id="quantity1" class="quantity" 
                     placeholder="0" size="3"></li>
          <li><input id="quantity2" class="quantity"  
                     placeholder="0" size="3"></li>
          <li><input id="quantity3" class="quantity" 
                     placeholder="0" size="3"></li>
          </form>
       </ul>
     </div>
</body>
</html>
