<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YOUR SHOPPING CART</title>
  <link href="cartStyle.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="column middle">
      <div class="column col1">
        <ul style="list-style-type: none;">
          <li id="prod1"><img class="products" src="nanoalpha.jpg" alt="alpha" width="300" height="300"></li>
          <li style="text-align: left;"> The Original Suit - Ground Combat Specialist</li>
          <br>
          <hr>
          <li id="prod2"><img class="products" src="nanobeta.jpg" alt="beta" width="300" height="300"></li>
          <li style="text-align: left;"> The Derivative Suit - Designed for Underwater</li>
          <br>
          <hr>
          <li id="prod3"><img class="products" src="nanosuit1.jpg" alt="nano1" width="300" height="300"></li>
          <li style="text-align: left;"> The Edge Suit - Adapt to All Combat </li>
          <br>
          <hr>
        </ul>
      </div>          
      <div class="column col4">
        <ul class="products">
          <form id="form2">
          <li><input id="quantity1" class="quantity" 
                     placeholder="0" size="3"></li>
                     <a>remove</a>
          <li><input id="quantity2" class="quantity"  
                     placeholder="0" size="3"></li>
          <li><input id="quantity3" class="quantity" 
                     placeholder="0" size="3"></li>
          </form>
       </ul>
     </div>
</body>
</html>
