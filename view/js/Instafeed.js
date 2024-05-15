/*var feed = new Instafeed({

    get: 'user',
    userId: 574033643966639,
    accessToken: 'IGQVJWNjZAuTFlGQ1UxWm03dkZAVdG4tX1g0MVdQZA0tXWEZADQUx4aDdPNm1aZAjJiXzN0YklnNmM4SHVla3VuOHlPQ2Q1Rjg4b2tDYzZAJN3Y4NE5oMmRBZA3Jxdnl1a25UVHlWd0pRbTJ2Uzh0Nm9lNTR1YQZDZD',
    template: '<div><img src="{{image}}" title="{{caption}}"/></div>',
    target: 'instafeed',
    after: function () {
        $('#instafeed').slick({
            dots: false,
            infinite: true,
            slidesToShow: 8,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
                }, {
                    breakpoint: 601,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }]
        });
    }
});

feed.run();
*/





  jQuery.noConflict();
  (function($) {
  // Init
  $(document).ready(function() {    
   var feed = new Instafeed({
        accessToken: 'IGQVJWNjZAuTFlGQ1UxWm03dkZAVdG4tX1g0MVdQZA0tXWEZADQUx4aDdPNm1aZAjJiXzN0YklnNmM4SHVla3VuOHlPQ2Q1Rjg4b2tDYzZAJN3Y4NE5oMmRBZA3Jxdnl1a25UVHlWd0pRbTJ2Uzh0Nm9lNTR1YQZDZD',
       limit: 4,
        centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
      
   });
      feed.run();
  });
  })(jQuery);