function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


var about = document.getElementById("aboutPage");
var game = document.getElementById("gamePage");
var contact = document.getElementById("contactPage");
var login = document.getElementById("loginPage");

var aboutColor = document.getElementById("aboutnav");
var gameColor = document.getElementById("gamenav");
var contactColor = document.getElementById("contactnav");
var loginColor = document.getElementById("loginnav");


function aboutFunction() {
    
    about.style.display = "block";
    game.style.display = "none";
    contact.style.display = "none";
    login.style.display = "none";

    aboutColor.style.color= "red";
    gameColor.style.color= "white";
    contactColor.style.color= "white";
    loginColor.style.color= "white";

}
function gameFunction() {
    about.style.display = "none";
    game.style.display = "block";
    contact.style.display = "none";
    login.style.display = "none";

    aboutColor.style.color= "white";
    gameColor.style.color= "red";
    contactColor.style.color= "white";
    loginColor.style.color= "white";
}
function contactFunction() {
    about.style.display = "none";
    game.style.display = "none";
    contact.style.display = "block";
    login.style.display = "none";

    aboutColor.style.color= "white";
    gameColor.style.color= "white";
    contactColor.style.color= "red";
    loginColor.style.color= "white";
}
function loginFunction() {
    about.style.display = "none";
    game.style.display = "none";
    contact.style.display = "none";
    login.style.display = "block";

    aboutColor.style.color= "white";
    gameColor.style.color= "white";
    contactColor.style.color= "white";
    loginColor.style.color= "red";
}