stickybits = require('stickybits')

document.addEventListener("DOMContentLoaded", function(){
  
window.addEventListener('resize', () => {

  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

});

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

  document.querySelector('body').style.opacity = 1
  stickybits('.sticky')
})