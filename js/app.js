document.getElementById("signUpLink").addEventListener("click", view);
document.getElementById("signInLink").addEventListener("click", view1);

function view(e) {
    if(document.getElementById("signUp").style.display = "block"){
        document.getElementById("signUpLink").classList.remove("bg-secondary");
        document.getElementById("signUpLink").classList.add("bg");
        document.getElementById("signInLink").classList.remove("bg");
        document.getElementById("signInLink").classList.add("bg-secondary");
    }
    document.getElementById("signIn").style.display = "none";
    document.getElementById("signUp").style.display = "block";
    e.preventDefault();
}

function view1(e) {
    document.getElementById("signIn").style.display = "block";
    document.getElementById("signUp").style.display = "none";
    document.getElementById("signInLink").classList.remove("bg-secondary");
    document.getElementById("signInLink").classList.add("bg");
    document.getElementById("signUpLink").classList.add("bg-secondary");
    document.getElementById("signUpLink").classList.remove("bg");
    e.preventDefault();
}