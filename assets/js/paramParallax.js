$('#myParallax').parallax({
  enableMouse: true,
  activateOnClick: false,
  sensitivityX: .5,
  sensitivityY: .4,
  easingCoefficient: 7,
  autoZCoordinate: true,
  useCustomZ: true,
  focusZ: 100
});
$(document).ready(function(){
  $('#myParallax').parallax({width: 1000,  height: 530,focusZ:80, sensitivityY:0.4, sensitivityX:1.2, easingCoefficient:30});
});
