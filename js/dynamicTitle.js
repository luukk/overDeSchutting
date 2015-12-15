$(document).ready(function() {
  var news = ['Michel Fugain', 'Indochine', 'Adamo'],
      count = news.length,
      currentItem = 0;

  showNextItem = function() {
      $('#dynamic-title').text(news[currentItem++]).fadeIn(3000, function() {
          var element = $(this);
          setTimeout(function() {
              element.fadeOut(1000, function() {
                  if (currentItem < count) {
                      showNextItem();
                  }
                  if(currentItem >=3){
                    currentItem = currentItem -3;
                  }
              });

          }, 3000);
      });

  };
  setInterval(showNextItem(),7000);
});
