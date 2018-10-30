

function imgOnClick(id){
    var xid = "#myModal"+id;
    $(xid).css("display", "block");
}
$( document ).ready(function() {        
//     $('#myImg1').click(()=>{
//         $('#myModal1').css("display", "block");
//     });

//     $('#myImg2').click(()=>{
//         $('#myModal2').css("display", "block");
//     });
// //harusnya ini id 5 tpi gw ubah manual di dbnya (yg dbawah)
//     $('#myImg3').click(()=>{
//         $('#myModal3').css("display", "block");
//     });
// //ini idnya lanjutan dr looping for d petseeder.php gw ga tau mau gmna lg jd ya gw ikutin aja(yg dbawah)
//     $('#myImg6').click(()=>{
//         $('#myModal6').css("display", "block");
//     });

//     $('#myImg7').click(()=>{
//         $('#myModal7').css("display", "block");
//     });


    $('.close').click(()=>{
        $('.modal').css('display','none');
    });

    // Get the modal
    var modal = document.getElementsByClassName('modal');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

// When the user clicks the button, open the modal

// $('#myImg3').click(()=>{
//     $('#myModal3').css("display", "block");
// });
//
// $('#myImg4').click(()=>{
//     $('#myModal4').css("display", "block");
// });
// $('#myImg5').click(()=>{
//     $('#myModal5').css("display", "block");
// });

