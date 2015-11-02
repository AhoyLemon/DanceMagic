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


function PopupCenter(url, title, w, h) {  
    // Fixes dual-screen position                         Most browsers      Firefox  
    var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;  
    var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;  
              
    width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;  
    height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;  
              
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;  
    var top = ((height / 2) - (h / 2)) + dualScreenTop;  
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);  
  
    // Puts focus on the newWindow  
    if (window.focus) {  
        newWindow.focus();  
    }  
}  


$('a.jackrabbit').click(function() {
  var wHeight = $(window).height();
  var nwHeight = wHeight-40;
  var nURL = $(this).attr('href');
  PopupCenter(nURL,'register','900',nwHeight);
  return false;
});