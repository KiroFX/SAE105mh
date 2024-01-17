window.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM entièrement chargé et analysé");
    
    setTimeout(function() {
        document.getElementById("loader").style.top = "-100vh";
    }, 1000);

    inputs = document.querySelectorAll('input:not(input[type="submit"]), textarea');

    inputs.forEach(e => {
        e.addEventListener("click", function () {
            inputs.forEach(e => {
                e.style.borderBottom = "2px solid #036D19";
            });
            this.style.borderBottom = "2px solid #05F140"; 
        });
    });
});