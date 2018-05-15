<!DOCTYPE html>
<html>
<head>
      <link href="shopStyle.css" type="text/css" rel="stylesheet">
      <title>ANEA SHOP</title>
       <meta charset="utf-8">
</head>
<body>
  <?php
    include 'header.php';
    ?>
    <h1 style="text-align: center";><strong>THE STORE</strong></h1>
 <div class="row">
  <div class="column">
     <img class="products" src="nanoalpha.jpg" alt="alpha" width="300" height="300">
     <br>
     <button>ADD</button>
  </div>
  <div class="column">
    <img class="products" src="nanobeta.jpg" alt="beta" width="300" height="300">
    <br>
    <button>ADD</button>
  </div>
  <div class="column">
    <img class="products" src="nanosuit1.jpg" alt="nano1" width="300" height="300">
    <br>
    <button>ADD</button>
  </div>
</div>
      
      <button id="cartBtn">VIEW CART</button>
  </body>
<script type="text/javascript" src="total.js"></script>
</html> 