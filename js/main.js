/* 菜单栏滚动 */
var new_scroll_position = 0;
var last_scroll_position;
var header = document.getElementsByClassName("header")[0];
var menu = document.getElementById("menu");
var wrap = document.getElementById("wrap");
 
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

// 移动端菜单栏
function toggleSidebar() {
  var show_sidebar = document.getElementById("left-col").classList.contains("show-sidebar");
  if (show_sidebar == false) {
    document.getElementById("left-col").classList.add("show-sidebar");
    wrap.style.position = "fixed";
    wrap.classList.add("move-wrap");
    menu.classList.remove("fa-bars");
    menu.classList.add("fa-times");
  } else {
    document.getElementById("left-col").classList.remove("show-sidebar");
    wrap.style.position = "absolute";
    wrap.classList.remove("move-wrap");
    menu.classList.remove("fa-times");
    menu.classList.add("fa-bars");
  }
}

menu.onclick = toggleSidebar;