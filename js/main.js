// OnLoad Spinner
var onLoadvar;
function loader() {
      onLoadvar = setTimeout(showPage, 1000);
}
function showPage() {
      document.getElementById("onLoadSpin").style.display = "none";
      document.getElementById("onLoad").style.display = "block";
}

// Timer
var countDownDate = new Date("Feb 23, 2018 15:00:00").getTime();
var x = setInterval(function() {
      var now = new Date().getTime();
      var distance = countDownDate - now;
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      document.getElementById("timerM1").innerHTML = days;
      document.getElementById("timerM2").innerHTML = hours;
      document.getElementById("timerM3").innerHTML = minutes;
      document.getElementById("timerM4").innerHTML = seconds;
      if (distance < 0) {
            clearInterval(x);
            return;
      }
}, 1000);

//Parallax.js
(function(){
      var parallax = document.querySelectorAll(".parallax"),
      speed = 0.5;
      window.onscroll = function(){
            [].slice.call(parallax).forEach(function(el,i){
                  var windowYOffset = window.pageYOffset,
                  elBackgrounPos = "0 " + (-1*windowYOffset * speed) + "px";
                  el.style.backgroundPosition = elBackgrounPos;
            });
      };
})();

//Back to Top Button
$(document).ready(function(){
      $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                  $('#back-to-top').fadeIn();
            } else {
                  $('#back-to-top').fadeOut();
            }
      });
      $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                  scrollTop: 0
            }, 800);
            return false;
      });
      $('#back-to-top').tooltip('show');
});

//Tabs Menu
$(document).ready(function(){
      $(".nav-tabs a").click(function(){
            $(this).tab('show');
      });
});

$(".Hbottom a[href^='#']").on('click', function(e) {
      e.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
            scrollTop: $(this.hash).offset().top
      }, 1200, function(){
            window.location.hash = hash;
      });
});
