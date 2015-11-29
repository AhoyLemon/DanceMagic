// jshint -W117

// open all offsite links in new tab.
$('a[href^=http]').click(function () {
  var a = new RegExp('/' + window.location.host + '/');
  if (!a.test(this.href)) {
      window.open(this.href);
      return false;
  }
});