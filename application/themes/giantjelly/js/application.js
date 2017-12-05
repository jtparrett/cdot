$(function(){
  $('[data-behaviour="toggle"]').on('click', function(){
    var target = $($(this).attr('href'));
    var classname = target.attr('class').split(' ')[0] + '--active';
    target.toggleClass(classname);
    return false;
  });
})