stickybits = require('stickybits')

document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('resize', () => {

    const mq = window.matchMedia( "(min-width: 768px)" )

  if (mq.matches) {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }
  
  });
  
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);

  stickybits('.sticky')
})