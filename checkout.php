<?php
include('./header.php');
?>
<style>
    .checkout-form label {
        display: block;
        font-size: 14px;
        margin-bottom: 12px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .single-method input[type=radio] {
        display: none;
    }
    .checkout-form .check-box {
    float: left;
    margin-right: 70px;
}
.checkout-form .check-box {
    float: left;
    margin-right: 70px;
}
.checkout-form .check-box input[type=checkbox] + label::after {
    position: absolute;
    left: 0;
    top: 0;
    display: block;
    content: "\f00c";
    font-family: Fontawesome;
    font-size: 12px;
    line-height: 20px;
    opacity: 0;
    color: #191919;
    width: 20px;
    text-align: center;
    -webkit-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
}
    .place-order {
    background-color: #191919;
    border: medium none;
    border-radius: 50px;
    color: #fff;
    float: left;
    font-size: 14px;
    font-weight: 700;
    height: 36px;
    line-height: 24px;
    margin-top: 40px;
    padding: 6px 20px;
    text-transform: uppercase;
    width: 158px;
}
.checkout-form .nice-select {
    width: 100%;
    background-color: transparent;
    border: 1px solid #999999;
    border-radius: 50px;
    line-height: 23px;
    padding: 10px 20px;
    font-size: 14px;
    height: 45px;
    color: #454545;
    margin-bottom: 15px;
}
    .checkout-form input {
        width: 100%;
        background-color: transparent;
        border: 1px solid #999999;
        border-radius: 50px;
        line-height: 23px;
        padding: 10px 20px;
        font-size: 14px;
        color: #454545;
        margin-bottom: 15px;
    }

    .single-method input[type=radio]+label {
        position: relative;
        padding-left: 30px;
        line-height: 20px;
        font-size: 14px;
        font-weight: 400;
        color: #191919;
        margin: 0;
    }

    .single-method input[type=radio]+label::before {
        position: absolute;
        left: 0;
        top: 0;
        width: 20px;
        height: 20px;
        display: block;
        border: 2px solid #999999;
        content: "";
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .checkout-cart-total {
        background-color: #f6f6f6;
        padding: 45px;
    }

    .checkout-payment-method {
        background-color: #f6f6f6;
        padding: 45px;
    }
    .checkout-cart-total p {
    font-size: 14px;
    line-height: 30px;
    font-weight: 600;
    color: #505050;
    padding: 10px 0;
    border-bottom: 1px solid #999999;
    margin: 0;
}
.checkout-cart-total ul li {
    color: #454545;
    font-size: 14px;
    line-height: 23px;
    font-weight: 600;
    display: block;
    margin-bottom: 16px;
}
.checkout-cart-total ul {
    border-bottom: 1px solid #999999;
    padding: 0;
    margin: 0;
}
.single-method {
    margin-bottom: 20px;
}
.mb--60 {
    margin-bottom: 60px;
}
.checkout-title {
    font-size: 20px;
    line-height: 23px;
    text-decoration: underline;
    text-transform: capitalize;
    font-weight: 700;
    margin-bottom: 30px;
}
</style>
<div class="checkout_area  pb--60" style="padding: 100px 0px 100px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <!-- Checkout Form s-->
                <form action="#" class="checkout-form">
                    <div class="row ">

                        <div class="col-lg-7 mb--20" style="padding-right: 50px;">

                            <!-- Billing Address -->
                            <div id="billing-form " class="mb--40">
                                <h4 class="checkout-title">Billing Address</h4>

                                <div class="row">

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="First Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Phone number">
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="Company Name">
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Address line 1">
                                        <input type="text" placeholder="Address line 2">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Country*</label>
                                        <select class="nice-select">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Town/City*</label>
                                        <input type="text" placeholder="Town/City">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>State*</label>
                                        <input type="text" placeholder="State">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Zip Code*</label>
                                        <input type="text" placeholder="Zip Code">
                                    </div>

                                    
                                </div>
                            </div>

                            <!-- Shipping Address -->
                            <div id="shipping-form" style="margin-top: 50px;">
                                <h4 class="checkout-title">Shipping Address</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>First Name*</label>
                                        <input type="text" placeholder="First Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Last Name*</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Email Address*</label>
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Phone no*</label>
                                        <input type="text" placeholder="Phone number">
                                    </div>

                                    <div class="col-12 mb--20">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="Company Name">
                                    </div>

                                    <div class="col-12 mb--20 ">
                                        <label>Address*</label>
                                        <input type="text" placeholder="Address line 1">
                                        <input type="text" placeholder="Address line 2">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Country*</label>
                                        <select class="nice-select">
                                            <option>Bangladesh</option>
                                            <option>China</option>
                                            <option>country</option>
                                            <option>India</option>
                                            <option>Japan</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Town/City*</label>
                                        <input type="text" placeholder="Town/City">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>State*</label>
                                        <input type="text" placeholder="State">
                                    </div>

                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Zip Code*</label>
                                        <input type="text" placeholder="Zip Code">
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-5">
                            <div class="row">

                                <!-- Cart Total -->
                                <div class="col-12 mb--60">

                                    <h4 class="checkout-title">Cart Total</h4>

                                    <div class="checkout-cart-total">

                                        <h4>Product <span>Total</span></h4>

                                        <ul>
                                            <li>Samsome Notebook Pro 5 X 01 <span>$295.00</span></li>
                                            <li>Aquet Drone D 420 X 02 <span>$550.00</span></li>
                                            <li>Play Station X 22 X 01 <span>$295.00</span></li>
                                            <li>Roxxe Headphone Z 75 X 01 <span>$110.00</span></li>
                                        </ul>

                                        <p>Sub Total <span>$1250.00</span></p>
                                        <p>Shipping Fee <span>$00.00</span></p>

                                        <h4>Grand Total <span>$1250.00</span></h4>

                                    </div>

                                </div>

                                <!-- Payment Method -->
                                <div class="col-12 mb--60">

                                    <h4 class="checkout-title">Payment Method</h4>

                                    <div class="checkout-payment-method">

                                        <div class="single-method">
                                            <input type="radio" id="payment_check" name="payment-method" value="check">
                                            <label for="payment_check">Check Payment</label>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                            <label for="payment_bank">Direct Bank Transfer</label>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                                            <label for="payment_cash">Cash on Delivery</label>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                                            <label for="payment_paypal">Paypal</label>
                                        </div>

                                        <div class="single-method">
                                            <input type="radio" id="payment_payoneer" name="payment-method" value="payoneer">
                                            <label for="payment_payoneer">Payoneer</label>
                                        </div>


                                    </div>

                                    <button class="place-order">Place order</button>

                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?php
include('./footer.php')
?>