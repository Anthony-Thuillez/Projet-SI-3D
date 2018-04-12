// window.addEventListener('mousemove', function(event) {
//   var x = event.pageX;
//   var y = event.pageY;
//   var ball = document.querySelector('.follower');
//
//   ball.style.left = x + "px";
//   ball.style.top = y + "px";
// });

var oval = document.querySelector('#Oval');
  var button = document.querySelector('.clickHold');
  var clickHoldCont = document.querySelector('.click-hold-container');
  var interval;
  button.addEventListener('mousedown', function() {
    interval = window.setInterval(function() {
      console.log('lol')
      clickHoldCont.setAttribute('onclick', 'location.href = "menu.php"');
    }, 1000)
    oval.classList.add('active');
  });

  button.addEventListener('mouseup', function() {
    oval.classList.remove('active');
    clearInterval(interval)
  });
