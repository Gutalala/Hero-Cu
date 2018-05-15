function runningTotal() {
    var quantity = document.getElementsByClassName("quantity");
    var price = document.getElementsByName("price");
    var total = 0;
    for (var i = 0; i < 3; i++) {
            total += parseInt(quantity[i].value || 0, 10) * parseInt(price[i].value || 0, 10);
            console.log(total);
    }
    document.getElementById("pricefin").innerHTML = total + '.00' + ' Mercuries';
    document.getElementById("finalprice").value = total + '.00' + ' Mercuries';
    document.getElementById("original").value = quantity[0].value;
    document.getElementById("derivative").value = quantity[1].value;
    document.getElementById("edge").value = quantity[2].value;
    document.getElementById("originaltotal").value = document.getElementById("sub1").value;
    document.getElementById("derivativetotal").value = document.getElementById("sub2").value;
    document.getElementById("edgetotal").value = document.getElementById("sub3").value;
}