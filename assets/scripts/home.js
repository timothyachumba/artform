global.jQuery = require('jquery')
Marquee3k = require('marquee3000')

global.jQuery("body").mousemove(function( event ) {
  
    var w = global.jQuery(this).width(),
    pct = 360*(+event.pageX)/w
    // global.jQuery(".gradient").attr({fill: bg})
    global.jQuery(".gradient").attr({gradientTransform: "rotate(" + pct + ")"})
      
})


document.addEventListener("DOMContentLoaded", function(){

  Marquee3k.init()

  function clamp(num, min, max) {
    return num <= min ? min : num >= max ? max : num
  }

  let scrollPosition = window.scrollY

  function checkHeight() {
    windowHeight = window.innerHeight
    aboutContentHeight = about.offsetHeight - windowHeight
    aboutScrollProgressRaw = (scrollPosition / aboutContentHeight * 100) / 100
    aboutScrollProgress = clamp(aboutScrollProgressRaw, 0, 1)
  }

  var about = document.querySelector('.about-content')
  var left = document.querySelector('.left')
  var right = document.querySelector('.right')
  var imageOverlay = document.querySelector('.overlay')

  window.addEventListener("scroll", function(){

    let scrollPosition = window.scrollY
    let aboutContentHeight = about.offsetHeight - windowHeight
    let aboutScrollProgressRaw = (scrollPosition / aboutContentHeight * 100) / 100
    let aboutScrollProgress = clamp(aboutScrollProgressRaw, 0, 1)

    imageOverlay.style.opacity = aboutScrollProgress

    if (scrollPosition >= (aboutContentHeight)) {
      right.classList.add('fixed')
      left.classList.remove('fixed')
      left.style.marginTop = (about.offsetHeight - windowHeight) + "px"
    } else {
      right.classList.remove('fixed')
      left.classList.add('fixed')
      left.style.marginTop = "0px"
    }
  
  })

  window.addEventListener("resize", function(){
    checkHeight()
  })
  
  window.addEventListener("load", function(){
    checkHeight()
  })
  
})
