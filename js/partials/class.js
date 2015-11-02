// jshint -W117

function hideClasses() {
  $('.class').each(function() {
    if ( $(this).hasClass('too-old') || $(this).hasClass('too-young') || $(this).hasClass('wrong-gender') || $(this).hasClass('wrong-day') ) {
      $(this).hide(600);
    } else {
      $(this).show(600);
    }
  });
}


$('#AgePick').change(function() {
  var age = parseInt($(this).val());
  $('.class').each(function() {
    if (age > parseInt($(this).attr('max-age')) ) {
      $(this).addClass('too-old');
    } else {
      $(this).removeClass('too-old');
    }
    if (age < parseInt($(this).attr('min-age')) ) {
      $(this).addClass('too-young');
    } else {
      $(this).removeClass('too-young');
    }
  });
  hideClasses();
});
$('#SelectGender').change(function() {
  if ( $(this).val() == "both") {
    $('.class').removeClass('wrong-gender');
  } else {
    var wrongGender = "";
    if ( $(this).val() == "M") {
      wrongGender = "F";
    } else if ( $(this).val() == "F") {
      wrongGender="M";
    }
    $('.class').each(function() {
      if ( $(this).attr('gender') == wrongGender ) {
        $(this).addClass('wrong-gender');
      } else {
        $(this).removeClass('wrong-gender');
      }
    });
  }
  hideClasses();
});
$('#ClassDay').change(function() {
  //alert('changed');
  if ( $(this).val() == "both") {
    $('.class').removeClass('wrong-day');
  } else {
    var day = $(this).val();
    $('.class').each(function() {
      if ( day.indexOf($(this).attr('day')) > -1 ) {
        $(this).removeClass('wrong-day');
        console.log('day match');
      } else {
        $(this).addClass('wrong-day');
      }
    });
  }
  hideClasses();
});