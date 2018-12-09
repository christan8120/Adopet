var x = document.getElementById("profile");
var y = document.getElementById("adoption");
var z = document.getElementById("loveMate"); 

y.style.display = "none";
z.style.display = "none";

function myFunction() {
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        z.style.display = "none";
    }
}

function myFunction1(){
    if(y.style.display === "none") {
        y.style.display = "block";
        x.style.display = "none";
        z.style.display = "none";
    }
}

function myFunction2(){
    if(z.style.display === "none") {
        z.style.display = "block";
        x.style.display = "none";
        y.style.display = "none";
    }
}


