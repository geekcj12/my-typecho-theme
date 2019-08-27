/* 菜单栏滚动 */
var new_scroll_position = 0;
var last_scroll_position;
var header = document.querySelector(".header");
var menu = document.querySelector("#menu");
var backDrop = document.getElementById("backdrop");

if (window.innerWidth <= 767) {
  window.addEventListener('scroll', function(e) {
      last_scroll_position = window.scrollY;
      
      // 向下滚动
      if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
        header.classList.remove("slide-down");
        header.classList.add("slide-up");
      }
      // 向上滚动
      if (new_scroll_position > last_scroll_position) {
        header.classList.remove("slide-up");
        header.classList.add("slide-down");
      }
      new_scroll_position = last_scroll_position;
  });
}

// 移动端菜单栏
function toggleSidebar() {
  document.querySelector(".sidebar").classList.add("show-sidebar");
  backDrop.classList.remove("hide");
}

menu.onclick = toggleSidebar;

backDrop.onclick = function() {
  document.querySelector(".sidebar").classList.remove("show-sidebar");
  backDrop.classList.add("hide");
};