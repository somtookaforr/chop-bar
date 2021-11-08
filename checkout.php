<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, maximum-scale=1.0"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/user-forms.css">

<body style="overflow-x: hidden;">    
<div class="container ">
<div class="row">

        <div class="col checkout_logo">
        <div style="display:inline-block;vertical-align:top;margin-top: 1rem;">
        <img src="assets/img/mainlogoo.png" alt="logo" width="150rem" class="mainlogo"><br>
        </div>
        <div style="display:inline-block;margin-top: 1rem;">
        <p class="navlogo">CHOP</p> <p class="underlogo">BAR</p>
        </div> 
        </div>    
        
        <div class="col checkoutform">
        <div class="card checkoutcard">
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" name="firstname" class="form-control" placeholder="John M. Doe">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="john@example.com">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" class="form-control" placeholder="542 W. 15th Street">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="New York">
    
                <div class="row">
                  <div class="col-6">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" class="form-control" placeholder="NY">
                  </div>
                  <div class="col-6">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" class="form-control" placeholder="10001">
                  </div>
                </div>
              </div>
    
              <div class="col">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color: black;"></i>
                </div>
                <label for="cname" class="p-2">Name on Card</label>
                <input type="text" id="cname" name="cardname" class="form-control" placeholder="John More Doe">
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" class="form-control" placeholder="1111-2222-3333-4444">
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth" class="form-control" placeholder="September">
    
                <div class="row">
                  <div class="col-6">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" class="form-control" placeholder="2018">
                  </div>
                  <div class="col-6">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" class="form-control" placeholder="352">
                  </div>
                </div>
              </div>
    
            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me to receive email notifications</label>
            </div> <br>
            <div align="center" class="p-2">          
            <a href="shop.php" class="btn btn-dark">Back To Shopping</a>
            <input type="submit" value="Pay now" class="btn" style="background-color: #EF7B45; color: white">
          </div>
          </form>

        </div>
        </div>
        </div>
</div>
</div>
</body>

