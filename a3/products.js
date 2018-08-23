// function to validate the product form to ensure there is a quantity entered before submitting.
function formValidate() {
  var quantityString = document.forms["cartForm"]["qty"].value;
  var quantityInt = parseInt(quantityString);
  var element = document.getElementsByClassName("errorMessage")[0];
  // console.log(x.constructor.name);
  if (!Number.isInteger(quantityInt) || quantityInt<1) {
    element.innerHTML = "Please enter a quantity before submitting.";
    element.className = "errorMessage displayed";
    return false;
  }

}

// function to increase the quantity by 1 when the + button is clicked.
function addQuantity(event) {
  event.preventDefault();
  var quantityString = document.forms["cartForm"]["qty"].value;
  if (quantityString !== "") {
    var quantityInt = parseInt(quantityString);
  } else quantityInt = 0;
  var newVal = quantityInt + 1;
  var newValString = newVal.toString();
  document.getElementsByName("qty")[0].value = newValString;
  updatePrice();
}

// function to decrease the quantity by 1 when the + button is clicked.
function minusQuantity(event) {
  event.preventDefault();
  var quantityString = document.forms["cartForm"]["qty"].value;
  if (quantityString !== "") {
    var quantityInt = parseInt(quantityString);
  } else quantityInt = 0;
  if (quantityInt > 0) {
    var newVal = quantityInt - 1;
  } else newVal = quantityInt;
  var newValString = newVal.toString();
  document.getElementsByName("qty")[0].value = newValString;
  updatePrice();

}

// function to validate the input for quantity so that only positive integers can be added.
function inputValidate() {
  var quantityString = document.forms["cartForm"]["qty"].value;
  var quantityInt = parseInt(quantityString);
  if (quantityInt >= 0) {
    var newQuantityString = quantityInt.toString();
    document.getElementsByName("qty")[0].value = newQuantityString;
  } else document.getElementsByName("qty")[0].value = 1;
  updatePrice();
}

// function to update the price for a product based on the quantity
function updatePrice() {
  var quantityString = document.forms["cartForm"]["qty"].value;
  var priceString = document.getElementById("original-price").innerHTML;
  if (quantityString > 1){
    var priceInt = parseFloat(priceString);
    var quantityInt = parseFloat(quantityString);
    var newPrice = (priceInt*quantityInt).toFixed(2) ;
    var newPriceString = newPrice.toString();
    document.getElementsByName("price") [0].value = newPriceString;
  }
  else
    document.getElementsByName("price") [0].value = priceString;
}

//function to check whether the credit card number entered is a visa and displays the visa logo
function checkVisa(){
  var creditCardString = document.forms["checkoutForm"]["creditCard"].value;
  var re = new RegExp("^(4(\\s{0,1}\\d){12,15})$");
  var element = document.getElementsByClassName("visaImg")[0];
  if (re.test(creditCardString)) {
    element.className = "visaImg displayed";
  }
  else element.className = "visaImg";
}