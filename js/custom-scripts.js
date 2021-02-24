// window.addEventListener("load", function () {
// 		    const loader = document.querySelector(".loader");
// 		    loader.className += " hidden"; // class "loader hidden"
// 		});

 $(window).on('load',function(){
    var delayMs = 1500; // delay in milliseconds

    setTimeout(function(){
        $('#exampleModal').modal('show');
    }, delayMs);
});    
