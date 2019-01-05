var profile = document.getElementById("profile");
var adoption = document.getElementById("adoption");
var loveMate = document.getElementById("loveMate"); 
var mypets = document.getElementById('mypets');

adoption.style.display = "none";
loveMate.style.display = "none";
mypets.style.display = "none";

function showProfile() {
    if (profile.style.display === "none") {
        profile.style.display = "block";
        adoption.style.display = "none";
        loveMate.style.display = "none";
        mypets.style.display = "none";
    }
}

function showAdoptions(){
    if(adoption.style.display === "none") {
        adoption.style.display = "block";
        profile.style.display = "none";
        loveMate.style.display = "none";
        mypets.style.display = "none";
    }
}

function showLoveMate(){
    if(loveMate.style.display === "none") {
        loveMate.style.display = "block";
        profile.style.display = "none";
        adoption.style.display = "none";
        mypets.style.display = "none";
    }
}

function showMyPets(){
    if(mypets.style.display === "none") {
        mypets.style.display = "block";
        profile.style.display = "none";
        adoption.style.display = "none";
        loveMate.style.display = "none";
    }
}

function update(petid, status)
{    
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    $.ajax({
        type:"get",
        url:"/updateStatus/"+petid+"/"+status,        
        success:function(msg){
          console.log(msg);
        }
      });     
}

function callit(){
    alert($('#selectMyPet').val());
}