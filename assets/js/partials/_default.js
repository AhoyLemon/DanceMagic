// jshint -W117

// open all offsite links in new tab.
$('a[href^=http]').click(function () {
  var a = new RegExp('/' + window.location.host + '/');
  if (!a.test(this.href)) {
      if ($(this).hasClass('jackrabbit')) {
        var wHeight = $(window).height();
        var nwHeight = wHeight-40;
        var nURL = $(this).attr('href');
        PopupCenter(nURL,'register','900',nwHeight);
      }
      window.open(this.href);
      return false;
  }
});