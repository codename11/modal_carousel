$('.carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  }
  else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel("pause");

    // Go to the first item
    $("#myBtn0").click(function(){
        $("#myCarousel").carousel(0);
    });

    // Go to the second item
    $("#myBtn1").click(function(){
        $("#myCarousel").carousel(1);
    });
// Go to the third item
    $("#myBtn2").click(function(){
        $("#myCarousel").carousel(2);
    });
    // Go to the forth item
    $("#myBtn3").click(function(){
        $("#myCarousel").carousel(3);
    });

    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});