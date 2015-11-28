$('dl.faq dt.question').click(function() {
  $(this).next('.answer').slideToggle(300);
});