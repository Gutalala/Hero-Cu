<!DOCTYPE html>
<html>
<head>
      <script type="text/javascript" src="total.js"></script>
      <link href="style.css" type="text/css" rel="stylesheet">
      <title>ANEA SHOP</title>
       <meta charset="utf-8">
</head>
<body onload="runningTotal()">
    <div class="column middle">
      <div class="column col1">
        <ul style="list-style-type: none;">
          <li id="prod1"><img class="products" src="nanoalpha.jpg" alt="alpha" width="300" height="300"></li>
          <li style="text-align: center;"> The Original - Ground Combat Specialist</li>
          <br>
          <hr>
          <li id="prod2"><img class="products" src="nanobeta.jpg" alt="beta" width="300" height="300"></li>
          <li style="text-align: center;"> The Derivative - Designed for Underwater</li>
          <br>
          <hr>
          <li id="prod3"><img class="products" src="nanosuit1.jpg" alt="nano1" width="300" height="300"></li>
          <li style="text-align: center;"> The Edge - Adapt to All Combat </li>
          <br>
          <hr>
        </ul>
      </div>
      <div class="column col3">
        <ul class="products">
          <li id="price1" name="price" value="1.00">&#9791;1</li>
          <li id="price2" name="price" value="2.00">&#9791;2</li>
          <li id="price3" name="price" value="3.00">&#9791;3</li>
          <button id="cartBtn">VIEW CART</button>
        </ul>
      </div>
      <div class="column col4">
        <ul class="products">
          <form id="form2">
          <li><input oninput="subTotal('price1','quantity1', 'sub1'); 
            runningTotal('quantity1', 'price1')" id="quantity1" class="quantity" 
                     placeholder="0" size="3"></li>
          <li><input oninput="subTotal('price2','quantity2', 'sub2'); 
            runningTotal('quantity2', 'price2')" id="quantity2" class="quantity"  
                     placeholder="0" size="3"></li>
          <li><input oninput="subTotal('price3','quantity3', 'sub3'); 
            runningTotal('quantity3', 'price3')" id="quantity3" class="quantity" 
                     placeholder="0" size="3"></li>
          <li id="pricefin" name="finalprice"></li>
          </form>
       </ul>
     </div>
     <div class="column col5">
      <ul class="products">
          <li id="sub1" value=""></li>
          <li id="sub2" value=""></li>
          <li id="sub3" value=""></li>
        </ul>
      </div>
  </body>
</html> 