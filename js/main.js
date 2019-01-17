/* 菜单栏滚动 */
var new_scroll_position = 0;
var last_scroll_position;
var header = document.getElementsByClassName("header")[0];
 
window.addEventListener('scroll', function(e) {
    last_scroll_position = window.scrollY;
    
    // 向下滚动
    if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
    header.classList.remove("slideDown");
    header.classList.add("slideUp");
    }
    // 向上滚动
    if (new_scroll_position > last_scroll_position) {
    header.classList.remove("slideUp");
    header.classList.add("slideDown");
    }
    
    new_scroll_position = last_scroll_position;
});

$(document).ready(function(){
  $('#menu').sideToggle({
    moving: '#left-col',
    direction: 'left'
  });
});