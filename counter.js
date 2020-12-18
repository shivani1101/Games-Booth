
//this functions creates a cookie and sets it to zero for game to begin   
if ($.cookie('clicks') === undefined) {
  $.cookie('clicks', '0', { path: '/' });
  alert("your score is Zero");
}


//increments the score by one whenever called and sets the relevant div 
$(document).ready(function () {
  $("#scora").text(parseInt($.cookie('clicks')));
  $("img").click(function () {
    value = parseInt($.cookie('clicks')) + 1;
    $.cookie('clicks', value);
    $("#scora").text(value);
  });
});
