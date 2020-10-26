$(".js-nav-open").click(function () {
  $(".nav__full").css('display','block');
  $(".nav__full").removeClass('animate__fadeOutUp');
  $(".nav__full").addClass('animate__fadeInDown');
  $('.nav__mobile').hide()
  return false;
});

$(".js-nav-close").click(function () {
  $(".nav__full").removeClass('animate__fadeInDown');
  $(".nav__full").addClass('animate__fadeOutUp');
  $('.nav__mobile').show()
  $('.nav__mobile').css('display','flex')
  return false;
});
