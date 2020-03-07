global.jQuery = require('jquery')
Marquee3k = require('marquee3000')
stickybits = require('stickybits')
innerHeight = require('ios-inner-height')

document.addEventListener("DOMContentLoaded", function(){

  global.jQuery('a').each(function() {
    var a = new RegExp('/' + window.location.host + '/');
    if(!a.test(this.href)) {
        global.jQuery(this).click(function(event) {
            event.preventDefault();
            event.stopPropagation();
            window.open(this.href, '_blank');
        });
    }
 });


  var sectionNav = document.getElementsByClassName("section-navigation-item")
  var toggleSections = function() {
    global.jQuery('html, body').animate({
      scrollTop: global.jQuery("#services").offset().top
    }, 400);
    var attribute = this.getAttribute("id");
    global.jQuery('.section').each(function () {
      if (global.jQuery(this).hasClass(attribute)) {
        global.jQuery('.section').removeClass('visible');
        global.jQuery(this).addClass('visible');
      } 
    });
    global.jQuery('.section-navigation-item').each(function () {
      if (global.jQuery(this).hasClass(attribute)) {
        global.jQuery('.section-navigation-item').removeClass('visible');
        global.jQuery(this).addClass('visible');
      } 
    });
  };

  for (var i = 0; i < sectionNav.length; i++) {
    sectionNav[i].addEventListener('click', toggleSections, false);
  }

  var acc = document.getElementsByClassName("accordion");
  var i;
  var x = document.querySelector('.section').childElementCount;

  function toggleAccordian(obj) {
    obj.classList.toggle("active");
    panel = obj.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  }

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      toggleAccordian(this)
    });
  }

  window.addEventListener("load", function(){
    toggleAccordian(acc[0])
    toggleAccordian(acc[x])
  });

  window.addEventListener("resize", function(){
    var allactivepanel = document.querySelectorAll(".accordion.active + .panel");
    for (var i = 0, max = allactivepanel.length; i < max; i++) {
      allactivepanel[i].style.maxHeight = allactivepanel[i].scrollHeight + "px";
    }
  });
  
  document.querySelector('body').style.opacity = 1
  stickybits('.sticky')
  
})

Marquee3k.init()
