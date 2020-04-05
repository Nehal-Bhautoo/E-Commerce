document.getElementById("loginBtn").addEventListener("click", function () {
    document.querySelector(".popup").style.display = "flex";
    disableScrolling();
});

document.querySelector(".close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
    enableScrolling();
});

function disableScrolling(){
    let x = window.scrollX;
    let y = window.scrollY;
    window.onscroll=function() {
        window.scrollTo(x, y);
        alert("Close login form to scroll");
    };
}

function enableScrolling(){
    window.onscroll=function(){};
}