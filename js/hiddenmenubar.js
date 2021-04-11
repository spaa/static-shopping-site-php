function openNav() {
    document.getElementById("Open1").style.display = "none";
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("Main").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
document.getElementById("Open1").style.display = "block";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("Main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}