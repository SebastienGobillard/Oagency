$(document).ready(function(){
  $("#slider").carousel({
    interval: 3500
  });
});

var app = {

  init: function() {

    console.log('init');

    var rellax = new Rellax('#banner', {
      speed: 1.2,
    });
  }
};

$(app.init);
