


$( document ).ready(function() {
    $('#myImg1').click(()=>{
        $('#myModal1').css("display", "block");
    });

    $('#myImg2').click(()=>{
        $('#myModal2').css("display", "block");
    });
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

