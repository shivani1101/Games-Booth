function myFunction() {    //This fucntion allows the navbar to be responsive 
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }


var about = document.getElementById("aboutPage");  //sets variables for each page 
var game = document.getElementById("gamePage");
var pop = document.getElementById("popPage");
var merch = document.getElementById("merchPage");
var contact = document.getElementById("contactPage");
var login = document.getElementById("loginPage");
var leader = document.getElementById("leaderPage");

var aboutColor = document.getElementById("aboutnav");
var gameColor = document.getElementById("gamenav");
var popColor = document.getElementById("popnav");
var merchColor = document.getElementById("merchnav");
var contactColor = document.getElementById("contactnav");
var loginColor = document.getElementById("loginnav");
var leaderColor = document.getElementById("leadernav");


function aboutFunction() {
    
    about.style.display = "block";   //sets only about page to veiw, all other pages are set to: no display
    game.style.display = "none";
    pop.style.display = "none";
    merch.style.display = "none";
    contact.style.display = "none";
    login.style.display = "none";
    leader.style.display = "none";
    
    


    aboutColor.style.color= "red";   //sets the about title to red and all others to white 
    gameColor.style.color= "white";
    popColor.style.color= "white";
    merchColor.style.color= "white";
    contactColor.style.color= "white";
    loginColor.style.color= "white";
    leaderColor.style.color= "white";
    

}
function gameFunction() {    
    about.style.display = "none";
    game.style.display = "block";  //makes game page visible 
    pop.style.display = "none";
    merch.style.display = "none";
    contact.style.display = "none";
    login.style.display = "none";
    leader.style.display = "none";

    aboutColor.style.color= "white";
    gameColor.style.color= "red";   //games title red . same with all other functions 
    popColor.style.color= "white";
    merchColor.style.color= "white";
    contactColor.style.color= "white";
    loginColor.style.color= "white";
    leaderColor.style.color= "white";
}
function popFunction() {
  about.style.display = "none";
  game.style.display = "none";
  pop.style.display = "block";
  merch.style.display = "none";
  contact.style.display = "none";
  login.style.display = "none";
  leader.style.display = "none";

  aboutColor.style.color= "white";
  gameColor.style.color= "white";
  popColor.style.color= "red";
  merchColor.style.color= "white";
  contactColor.style.color= "white";
  loginColor.style.color= "white";
  leaderColor.style.color= "white";
}
function merchFunction() {
  about.style.display = "none";
  game.style.display = "none";
  pop.style.display = "none";
  merch.style.display = "block";
  contact.style.display = "none";
  login.style.display = "none";
  leader.style.display = "none";

  aboutColor.style.color= "white";
  gameColor.style.color= "white";
  popColor.style.color= "white";
  merchColor.style.color= "red";
  contactColor.style.color= "white";
  loginColor.style.color= "white";
  leaderColor.style.color= "white";
}


function contactFunction() {
    about.style.display = "none";
    game.style.display = "none";
    pop.style.display = "none";
    merch.style.display = "none";
    contact.style.display = "block";
    login.style.display = "none";
    leader.style.display = "none";

    aboutColor.style.color= "white";
    gameColor.style.color= "white";
    popColor.style.color= "white";
    merchColor.style.color= "white";
    contactColor.style.color= "red";
    loginColor.style.color= "white";
    leaderColor.style.color= "white";
}
function loginFunction() {
    about.style.display = "none";
    game.style.display = "none";
    pop.style.display = "none";
    merch.style.display = "none";
    contact.style.display = "none";
    login.style.display = "block";
    leader.style.display = "none";

    aboutColor.style.color= "white";
    gameColor.style.color= "white";
    popColor.style.color= "white";
    merchColor.style.color= "white";
    contactColor.style.color= "white";
    loginColor.style.color= "red";
    leaderColor.style.color= "white";
}

function leaderFunction() {
  about.style.display = "none";
  game.style.display = "none";
  pop.style.display = "none";
  merch.style.display = "none";
  contact.style.display = "none";
  login.style.display = "none";
  leader.style.display = "block";

  aboutColor.style.color= "white";
  gameColor.style.color= "white";
  popColor.style.color= "white";
  merchColor.style.color= "white";
  contactColor.style.color= "white";
  loginColor.style.color= "white";
  leaderColor.style.color= "red";
}

// slideshow starts

var picnum = 1;
showSlides(picnum);

function plusSlides(num) {
  showSlides(picnum += num);
}

function currentSlide(num) {
  showSlides(picnum = num);
}

function showSlides(num) {
  var i;
  var pictures = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (num > pictures.length) {picnum = 1}     //when it reaches end of images, goes back to the first image
  if (num < 1) {picnum = pictures.length} 
  
  for (i = 0; i < pictures.length; i++) { //loops and displays the images one by one 
      pictures[i].style.display = "none";  
  }
  
  for (i = 0; i < dots.length; i++) {  //loops through the images 
      dots[i].className = dots[i].className.replace(" active", "");
  }
  pictures[picnum-1].style.display = "block";  
  dots[picnum-1].className += " active";
}
var picindex = 0; //starts at index 0
slideShow();

function slideShow() {
  var i;
  var slide_ = document.getElementsByClassName("mySlides");
  var dots_ = document.getElementsByClassName("dot");
  for (i = 0; i < slide_.length; i++) { //loops through the images 
    slide_[i].style.display = "none";  
  }
  picindex++;
  if (picindex > slide_.length) {picindex = 1}    
  for (i = 0; i < dots_.length; i++) {
    dots_[i].className = dots_[i].className.replace(" active", ""); //sets the active image 
  }
  slide_[picindex-1].style.display = "block";  
  dots_[picindex-1].className += " active";
  setTimeout(slideShow, 2000); // Change image every 2 seconds
}


