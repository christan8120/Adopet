var profile = document.getElementById("profile");
var adoption = document.getElementById("adoption");
var loveMate = document.getElementById("loveMate"); 

adoption.style.display = "none";
loveMate.style.display = "none";

function showProfile() {
    if (profile.style.display === "none") {
        profile.style.display = "block";
        adoption.style.display = "none";
        loveMate.style.display = "none";
    }
}

function showAdoptions(){
    if(adoption.style.display === "none") {
        adoption.style.display = "block";
        profile.style.display = "none";
        loveMate.style.display = "none";
    }
}

function showLoveMate(){
    if(loveMate.style.display === "none") {
        loveMate.style.display = "block";
        profile.style.display = "none";
        adoption.style.display = "none";
    }
}


