function openNav() {
    document.getElementById("nav").style.width = "100vw";
    document.getElementById("nav").style.opacity = "1";
    document.getElementById("backnav").style.background = "rgba(0, 0, 0, 0.452)"
}

function closeNav() {
    document.getElementById("nav").style.width = "0";
    document.getElementById("nav").style.opacity = "0";
    document.getElementById("backnav").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.452), rgba(0, 0, 0, 0))"
}

function openUser() {
    document.getElementById("user").style.width = "100vw";
    document.getElementById("user").style.opacity = "1";
    document.getElementById("backuser").style.background = "rgba(0, 0, 0, 0.452)"
}

function closeUser() {
    document.getElementById("user").style.width = "0";
    document.getElementById("user").style.opacity = "0";
    document.getElementById("backuser").style.background = "linear-gradient(to right, rgba(0, 0, 0, 0.452), rgba(0, 0, 0, 0))"
}