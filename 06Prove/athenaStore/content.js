function first(name, theClass){
    var reg = new RegExp(/\s*([A-Z]|[a-z])+\s*$/);
    console.log(name.search(reg));
    if(name.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function last(sur, theId){
    var reg = new RegExp(/\s*([A-Z]|[a-z])+\s*$/);
    console.log(sur.search(reg));
    if(sur.search(reg) != 0) {
        document.getElementById(theId).style.borderColor = "red";
    } else {
        document.getElementById(theId).style.borderColor = "transparent";
        document.getElementById(theId).style.borderBottom = "1px solid black";
        return true;
    }
}

function address1(ad, theClass){
    var reg = new RegExp(/\s*(\w|\W)+\s*$/);
    console.log(ad.search(reg));
    if(ad.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function city(cit, theClass){
    var reg = new RegExp(/\s*([A-Z]|[a-z])+\s*$/);
    console.log(cit.search(reg));
    if(cit.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function state(sta, theClass){
    var reg = new RegExp(/\s*(AL|AK|AS|AZ|AR|CA|CO|CT|DE|DC|FM|FL|GA|GU|HI|ID|IL|IN|IA|KS|KY|LA|ME|MH|MD|MA|MI|MN|MS|MO|MT|NE|NV|NH|NJ|NM|NY|NC|ND|MP|OH|OK|OR|PW|PA|PR|RI|SC|SD|TN|TX|UT|VT|VI|VA|WA|WV|WI|WY)+\s*$/);
    console.log(sta.search(reg));
    if(sta.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function zip(zp, theClass){
    var reg = new RegExp(/\s*\d{5}\s*$/);
    console.log(zp.search(reg));
    if(zp.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function phone(pho, theClass){
    var reg = new RegExp(/\s*\d{10}\s*$/);
    console.log(pho.search(reg));
    if(pho.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function card(car, theClass){
    var reg = new RegExp(/\s*((\d{4}\s\d{4}\s\d{4}\s\d{4})|(\d{4}\d{4}\d{4}\d{4}))\s*$/);
    console.log(car.search(reg));
    if(car.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function expiration(ex, theClass){
    var reg = new RegExp(/\s*(0[1-9]|1[0-2])\/(1[7-9]|2\d)\s*$/);
    console.log(ex.search(reg));
    if(ex.search(reg) != 0) {
        document.getElementsByClassName(theClass)[0].style.borderColor = "red";
    } else {
        document.getElementsByClassName(theClass)[0].style.borderColor = "transparent";
        document.getElementsByClassName(theClass)[0].style.borderBottom = "1px solid black";
        return true;
    }
}

function submitInfo() {
    alert("Thanks for shopping with us");
    location.reload();
}

function resetInfo() {
    location.reload();
}

function calculateTotal() {
    var p1, p2, p3, p4, p5, p6, totalPrice;
    p1 = document.getElementById("quantity1");
    totalPrice = p1.value * 53.48;
    p2 = document.getElementById("quantity2");
    totalPrice += p2.value * 45.99;
    p3 = document.getElementById("quantity3");
    totalPrice += p3.value * 33.90;
    p4 = document.getElementById("quantity4");
    totalPrice += p4.value * 32.99;
    p5 = document.getElementById("quantity5");
    totalPrice += p5.value * 49.49;
    p6 = document.getElementById("quantity6") 
    totalPrice += p6.value * 69.99;
    
    
    price.innerText = "$"+ totalPrice.toFixed(2);
    tax.innerText = "$"+ (totalPrice * 0.06).toFixed(2);
    total.innerText = "$"+ (totalPrice + (totalPrice * 0.06) + 7.99).toFixed(2);

}


