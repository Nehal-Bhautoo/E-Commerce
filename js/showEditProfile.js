document.getElementById("editBtn").addEventListener("click", function () {
    document.querySelector(".popup3").style.display = "flex";
});

document.querySelector(".close3").addEventListener("click", function() {
    document.querySelector(".popup3").style.display = "none";
    enableScrolling();
});