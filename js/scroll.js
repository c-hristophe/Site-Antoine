(function () {
    
    "use strict"

   
    const detectAndAnimate = () => {
        
        const elements = document.querySelectorAll('.animate-on-scroll');
       
        elements.forEach(element => {
           
            const isVisible = isElementInViewport(element);
            
            element.classList.toggle('is-visible', isVisible);
        });
    };
   
    const isElementInViewport = el => {
        
        const rect = el.getBoundingClientRect();
        
        const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
        
        const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
        
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= viewportHeight &&
            rect.right <= viewportWidth
        );
    };
   
    window.addEventListener('scroll', detectAndAnimate);
    
    detectAndAnimate();
})()




  var maVideo = document.getElementById("maVideo");
  var apear = document.getElementById("apear");

  maVideo.addEventListener("mouseover", function play() {
    maVideo.autoplay = true;
    apear.style.display = "bloc";
   });
  
  maVideo.addEventListener("mouseout", function pause() {
    maVideo.autoplay = false;
    apear.style.display = "none";
  });

  






  $(document).ready(function(){
    var mouseX, mouseY;
    var ww = $( window ).width();
    var wh = $( window ).height();
    var traX, traY;
    $(document).mousemove(function(e){
      mouseX = e.pageX;
      mouseY = e.pageY;
      traX = ((4 * mouseX) / 570) + 40;
      traY = ((4 * mouseY) / 570) + 50;
      console.log(traX);
      $(".title").css({"background-position": traX + "%" + traY + "%"});
    });
  });


  


