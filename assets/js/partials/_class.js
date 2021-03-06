// jshint -W117

function hideClasses() {
  $('.class').each(function() {
    if ( $(this).hasClass('too-old') || $(this).hasClass('too-young') || $(this).hasClass('wrong-level') || $(this).hasClass('wrong-session') || $(this).hasClass('wrong-classtype') ) {
      $(this).hide(600);
    } else {
      $(this).show(600);
    }
  });
}


$('#AgePick').on('keyup change', function() {
  if (isNaN($(this).val()) || $(this).val() === null || $(this).val() < 2) {
    $('.class').removeClass('too-old, too-young');
  } else {
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
  }
  hideClasses();
});

$('#SelectLevel').change(function() {
  if ( $(this).val() == "any") {
    $('.class').removeClass('wrong-level');
  } else {
    var myLevel = $(this).val();
    //if ($(this).val()
    $('.class').each(function() {
      if ($(this).attr('explevel')) {
        if ($(this).attr('explevel').indexOf(myLevel) > -1 || $(this).attr('explevel') == "all" ) {
          $(this).removeClass('wrong-level');
        } else {
          $(this).addClass('wrong-level');
        }
      }
    });
  }
  hideClasses();
});

$('#SelectSession').change(function() {
  if ( $(this).val() == "any") {
    $('.class').removeClass('wrong-session');
  } else {
    var mySession = $(this).val();
    $('.class').each(function() {
      if ($(this).attr('session') != mySession) {
        $(this).addClass('wrong-session');
      } else {
        $(this).removeClass('wrong-session');
      }
    });
  }
  hideClasses();
});

$('#SelectClassType').change(function() {
  if ( $(this).val() == "any") {
    $('.class').removeClass('wrong-classtype');
  } else {
    var mySession = $(this).val();
    $('.class').each(function() {
      if ($(this).attr('classtype') != mySession) {
        $(this).addClass('wrong-classtype');
      } else {
        $(this).removeClass('wrong-classtype');
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

/*
$('a.jackrabbit').click(function() {
  var wHeight = $(window).height();
  var nwHeight = wHeight-40;
  var nURL = $(this).attr('href');
  PopupCenter(nURL,'register','900',nwHeight);
  return false;
});
**/