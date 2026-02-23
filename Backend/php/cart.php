<html>
<head>
    <title>Cart - Sailila Aluminium</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<style>
    </style>
<body onload="loadCartProducts()">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo1.png" width="125px">
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="womenproduct.php">Women</a></li>
                    <li><a href="men.php">Men</a></li>
        
                </ul>
            </nav>
            <a href="cart1.php"><img src="cart.png" width="25px" height="25px"></a>
            <img src="menu.png" width="25px" height="25px" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tbody id="cartDetails">
                <!-- Products will be loaded here by JavaScript -->
            </tbody>
            </table>
        <div class="total-price">
            <table>
                <tr>
                
                    <td>Total  <span id="totalPrice">0.00</span></td>
                    <td><button class="btn" onclick="checkout()">Checkout</button></td>
                </tr>
            </table>
        </div>
       
    </div>
    
    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>
    <h3 style="border: 0cap; border-color: white; background-color: red; text-align: center; padding: 0.5cm; "> HOMEGROWN INDIAN BRAND </h3>

<h1 style="text-align: center; margin: 1cm; color: black;"> Over 6 Million Customers </h1>



<style>

.small-container {
    width: 80%;
    max-width: 800px;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.cart-page img {
    width: 100px;
    height: auto;
}

.quantity-controls {
    display: flex;
    align-items: center;
}

.quantity-controls button {
    background: #ddd;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

.quantity-controls input {
    width: 50px;
    text-align: center;
    margin: 0 5px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

.features {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 50px;
  }
  
  .feature {
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
  }
  
  .featureIcon {
	width: 50px;
	height: 50px;
  }
  
  .featureTitle {
	font-size: 20px;
	font-weight: 600;
	margin: 20px;
  }
  
  .featureDesc {
	color: gray;
	width: 50%;
	height: 100px;
  }

</style>


<table style="background-color: rgb(241, 233, 233);">
  <tr>
  <th style="color: red; padding-left: 4cm; padding-right: 2cm; "> NEED HELP </th>
  <th style="color: red;  padding-left: 2cm; padding-right: 2cm; "> COMPANY </th>
  <th style="color: red;  padding-left: 2cm; padding-right: 2cm; "> MORE INFO </th>
  <th style="color: red;  padding-left: 2cm; padding-right: 2cm; "> STORE NEAR ME </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> Contact Us </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; "> About US </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; "> T&C </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Bandra </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> Track Order </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; "> Careers </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; "> Privacy Policy </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Thane </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> Returns and Refunds </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; "> Community iniativities</th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; "> Sitemap </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Colaba </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> FAQs </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; "> Souled Army </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> latur </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> My Account </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Malaad </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; "> </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small;  padding-left: 2cm; padding-right: 2cm; "> Ghatkopar </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Goregaon </th>

  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Pune </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Banglore </th>
  </tr>

  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Indore </th>
  </tr>
  <tr>
    <th style="color: black; font-size: small; padding-left: 4cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black;font-size:small;  padding-left: 2cm; padding-right: 2cm; ">  </th>
    <th style="color: black; font-size: small; padding-left: 2cm; padding-right: 2cm; "> Haryana </th>
  </tr>

  <tr>
    <th style="color: rgb(80, 75, 75); font-size: small; padding-left: 4cm; padding-right: 2cm; padding-top: 5cm; ">  COD Available </th>
  </tr>
  <tr>
    <th style="color: rgb(72, 67, 67); font-size: small; padding-left: 4cm; padding-right: 2cm; "> 30 Days Easy Returns </th> 
  </tr>
  </table>
  <body style="background-color: rgb(241, 233, 233);">

    <h4 style="color: rgb(49, 33, 33); text-align: center; padding-top: 2cm;"> EXPERIENCE THE SOULD STORE APP </h4>
    <br></br>
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }

        function loadCartProducts() {
            var cart = JSON.parse(localStorage.getItem('cartProducts')) || [];
            var cartDetails = document.getElementById('cartDetails');
            var total = 0;

            if (cart.length === 0) {
                cartDetails.innerHTML = '<tr><td colspan="3"><p>Your cart is empty.</p></td></tr>';
            } else {
                cartDetails.innerHTML = '';
                cart.forEach(function(product, index) {
                    var productTotal = parseFloat(product.price);
                    total += productTotal;
                    cartDetails.innerHTML += `
                        <tr>
                            <td>
                                <div class="cart-info">
                                    <img src="${product.image}">
                                    <div>
                                        <p>${product.name}</p>
                                        <small>Price: ${product.price}</small>
                                        <br>
                                        <a href="#" onclick="removeFromCart(${index})">Remove</a>
                                    </div>
                                </div>
                            </td>
                            <td><input type="number" value="1" min="1" onchange="updateSubtotal(${index}, this.value)"></td>
                            <td>$<span id="productSubtotal${index}">${product.price}</span></td>
                        </tr>
                    `;
                });
                document.getElementById('totalPrice').innerText = total.toFixed(2);
            }
        }

        function updateSubtotal(index, quantity) {
            var cart = JSON.parse(localStorage.getItem('cartProducts')) || [];
            if (cart[index]) {
                var subtotal = cart[index].price * quantity;
                document.getElementById('productSubtotal' + index).innerText = subtotal.toFixed(2);
                updateTotalPrice();
            }
        }

        function updateTotalPrice() {
            var cart = JSON.parse(localStorage.getItem('cartProducts')) || [];
            var total = 0;
            cart.forEach(function(product, index) {
                var subtotal = parseFloat(document.getElementById('productSubtotal' + index).innerText.replace('Rs ', ''));
                total += subtotal;
            });
            document.getElementById('totalPrice').innerText = 'Rs ' + total.toFixed(2);;
        }

        function removeFromCart(index) {
            var cart = JSON.parse(localStorage.getItem('cartProducts')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cartProducts', JSON.stringify(cart));
            loadCartProducts();
        }

        function checkout() {
        var cart = JSON.parse(localStorage.getItem('cartProducts')) || [];
        if (cart.length === 0) {
            alert("Your cart is empty. Please add some items before checkout.");
            return;
        }

        // Create the bill
        var billContent = "Bill Details:\n";
        cart.forEach(function(product, index) {
            billContent += `${index + 1}. ${product.name} - Quantity: ${product.quantity} - Subtotal: ${product.price * product.quantity}\n`;
        });
        billContent += `\nTotal: ${document.getElementById('totalPrice').innerText}`;

        // You can handle this bill content as you like, such as displaying it in an alert or sending it to a server.
        alert(billContent);

        // Clear the cart after checkout
        localStorage.removeItem('cartProducts');
        loadCartProducts();
    }
    </script>
</body>
</html>
