var domHours = document.querySelector('.hours'),
    domMinutes = document.querySelector('.minutes'),
    domSeconds = document.querySelector('.seconds'),
    secCurrDeg,
    minCurrDeg,
    hourCurrDeg,
    sound = document.getElementById('sound'),
    volume = document.getElementById('volume'),
    clock = document.getElementById('clock');

(function () {
    setInterval(function () {
        date = new Date();
        seconds = date.getSeconds();
        minutes = date.getMinutes();
        hours = date.getHours();
        correct.seconds();
        correct.minutes();
        correct.hours();
    }, 1000);
})();
setTimeout(function(){
    correct.seconds();
    correct.minutes();
    correct.hours();
    volume.style.opacity = 0;
    sound.play();
},1100);
var correct = {
  seconds: function () {
      for(var i = 60; i >=0 ; i--) {
          if (seconds == i) {
              secCurrDeg = i * 6;
              domSeconds.style.transform = "rotateZ(" + secCurrDeg + "deg)";
          }
      }
  },
  minutes: function () {
      for(var i = 60; i >=0 ; i--) {
          if ( minutes == i ) {
              minCurrDeg = i*6;
              domMinutes.style.transform = "rotateZ(" + minCurrDeg + "deg)";
          }
      }
  },
  hours: function () {
      for(var i = 60; i >=0 ; i--) {
          if ( hours == i ) {
              hourCurrDeg = i*30;
              domHours.style.transform = "rotateZ(" + hourCurrDeg + "deg)";
          }
      }
  }
};


clock.addEventListener('dblclick', function(){
    function animation (element) {
        element.style.opacity = 1;
        setTimeout(function(){element.style.opacity = 0;},1000)
    }
    if (volume.className === 'volume-muted') {
        volume.className = 'volume-high';
        sound.play();
        animation(volume);
        return
    }
    if (volume.className == 'volume-high') {
        volume.className = 'volume-muted';
        sound.pause();
        animation(volume);
    }
});