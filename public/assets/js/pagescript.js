function isMobileDevice() {
    return window.innerWidth <= 767;
  }

  function enableSlider() {
    var sliderContainer = document.querySelector('.New-collection-container');
    var nextButton = sliderContainer.querySelector('.button-next');
    var prevButton = sliderContainer.querySelector('.button-prev');
    var articles = sliderContainer.querySelectorAll('.article_new_collection');
    var currentIndex = 0;

    function showImage(index) {
      for (var i = 0; i < articles.length; i++) {
        if (i === index) {
          articles[i].style.display = 'block';
        } else {
          articles[i].style.display = 'none';
        }
      }
    }

    function showNextImage() {
      currentIndex = (currentIndex + 1) % articles.length;
      showImage(currentIndex);
    }

    function showPreviousImage() {
      currentIndex = (currentIndex - 1 + articles.length) % articles.length;
      showImage(currentIndex);
    }

    showImage(currentIndex);
    nextButton.addEventListener('click', showNextImage);
    prevButton.addEventListener('click', showPreviousImage);
  }

  document.addEventListener('DOMContentLoaded', function() {
    if (isMobileDevice()) {
      enableSlider();
    } else {
      var articles = document.querySelectorAll('.article_new_collection');
      for (var i = 0; i < articles.length; i++) {
        articles[i].style.display = 'block';
      }
    }
  });