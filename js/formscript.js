    $("#modalbtn,#modalbtn2,#modalbtn3").click(function(e) {
  e.preventDefault();
  $("#popup").css('display', 'block');
  $("#close").css('display', 'block');
  $("#overlay").css('display', 'block'); 
  })
  $("#close").click(function(e) {
  e.preventDefault();
  $("#popup").css('display', 'none');
  $("#close").css('display', 'none');
  $("#overlay").css('display', 'none'); 
  })  

  $("#modalframebtn,#modalframebtn2").click(function(e) {
  e.preventDefault();
  $("#popup2").css('display', 'block');
  $("#close2").css('display', 'block');
  $("#overlay2").css('display', 'block'); 
  })
  $("#close2").click(function(e) {
  e.preventDefault();
  $("#popup2").css('display', 'none');
  $("#close2").css('display', 'none');
  $("#overlay2").css('display', 'none'); 
  })

  $("#steps1,#steps1btn").click(function(e) {
  e.preventDefault();
  $("#steps1").addClass('active');
  $("#steps1,#steps2,#steps3,#steps4,#steps5").removeClass('complite');
  $("#steps2,#steps3,#steps4,#steps5").removeClass('active');
  $("#step2,#step3,#step4,#step5").removeClass('visible');
  $("#step1").addClass('visible');
  })
 $("#steps2,#steps2btn").click(function(e) {
  e.preventDefault();
  $("#steps2").addClass('active');
  $("#steps2,#steps3,#steps4,#steps5").removeClass('complite');
  $("#steps1,#steps3,#steps4,#steps5").removeClass('active');
  $("#steps1").addClass('complite');
  $("#step1,#step3,#step4,#step5").removeClass('visible');
  $("#step2").addClass('visible');
  })
  $("#steps3,#steps3btn").click(function(e) {
  e.preventDefault();
  $("#steps3").addClass('active');
  $("#steps2,#steps1,#steps4,#steps3,#steps5").removeClass('complite');
  $("#steps1,#steps2,#steps4,#steps5").removeClass('active');
  $("#steps1,#steps2").addClass('complite');
  $("#step1,#step2,#step4,#step5").removeClass('visible');
  $("#step3").addClass('visible');
  })
  $("#steps4,#steps4btn").click(function(e) {
  e.preventDefault();
  $("#steps4").addClass('active');
  $("#steps2,#steps1,#steps3,#steps4,#steps5").removeClass('complite');
  $("#steps1,#steps2,#steps3,#steps5").removeClass('active');
  $("#steps1,#steps2,#steps3").addClass('complite');
  $("#step1,#step2,#step3,#step5").removeClass('visible');
  $("#step4").addClass('visible');
  })
  $("#steps5,#steps5btn").click(function(e) {
  e.preventDefault();
  $("#steps5").addClass('active');
  $("#steps2,#steps1,#steps3,#steps4").removeClass('complite');
  $("#steps1,#steps2,#steps3,#steps4").removeClass('active');
  $("#steps1,#steps2,#steps3,#steps4").addClass('complite');
  $("#step1,#step2,#step3,#step4").removeClass('visible');
  $("#step5").addClass('visible');
  })


$("#box__item1").click(function(e) {
  e.preventDefault();
  $("#box__item2,#box__item3").removeClass('active');
  $("#box__step2,#box__step3").removeClass('visibility');
  $("#box__step1").addClass('visibility');
  $("#box__item1").addClass('active');
})
$("#box__item2").click(function(e) {
  e.preventDefault();
  $("#box__item1,#box__item3").removeClass('active');
  $("#box__step1,#box__step3").removeClass('visibility');
  $("#box__step2").addClass('visibility');
  $("#box__item2").addClass('active');
})
$("#box__item3").click(function(e) {
  e.preventDefault();
  $("#box__item1,#box__item2").removeClass('active');
  $("#box__step1,#box__step2").removeClass('visibility');
  $("#box__step3").addClass('visibility');
  $("#box__item3").addClass('active');
})


  $(".calc__box__item").click(function(e) {
  e.preventDefault();
  $(".calc__box__item").removeClass('active');
  $(this).addClass('active');
  })


  $("#calc__item1").click(function(e) {
  e.preventDefault();
    $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
   $("#calc__item1").toggleClass('selected');
  $("#calc__item1 img").toggleClass('active');
  })
    $("#calc__item2").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item2").toggleClass('selected');
  $("#calc__item2 img").toggleClass('active');
  })
    $("#calc__item3").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item3").toggleClass('selected');
  $("#calc__item3 img").toggleClass('active');
  })
    $("#calc__item4").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item4").toggleClass('selected');
  $("#calc__item4 img").toggleClass('active');
  })
    $("#calc__item5").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item5").toggleClass('selected');
  $("#calc__item5 img").toggleClass('active');
  })
    $("#calc__item6").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item6").toggleClass('selected');
  $("#calc__item6 img").toggleClass('active');
  })
    $("#calc__item7").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item7").toggleClass('selected');
  $("#calc__item7 img").toggleClass('active');
  })
    $("#calc__item8").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item8").toggleClass('selected');
  $("#calc__item8 img").toggleClass('active');
  })
    $("#calc__item9").click(function(e) {
  e.preventDefault();
      $(".calc__image").removeClass('selected');
  $(".calc__image img").removeClass('active');
  $("#calc__item9").toggleClass('selected');
  $("#calc__item9 img").toggleClass('active');
  })

