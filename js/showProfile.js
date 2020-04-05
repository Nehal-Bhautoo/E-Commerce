document.getElementById("profileBtn").addEventListener("click", function () {
    document.querySelector(".popup2").style.display = "flex";
    disableScrolling();
});

document.querySelector(".close2").addEventListener("click", function() {
    document.querySelector(".popup2").style.display = "none";
    enableScrolling();
});

function disableScrolling(){
    let x = window.scrollX;
    let y = window.scrollY;
    window.onscroll=function() {
        window.scrollTo(x, y);
        alert("Close profile to scroll");
    };
}

function enableScrolling(){
    window.onscroll=function(){};
}