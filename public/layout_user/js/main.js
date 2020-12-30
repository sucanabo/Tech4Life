//====================POPOVERS====================================
$(document).ready(function () {
  $(".post-menu__btn").click(function () {
    $(".el-dropdown-menu").toggleClass("d-block")
  });
  $(".comment__menu > span").click(function () {
    $(".comment__menu >.el-dropdown-menu").toggleClass("d-block")
  });
});
function openPopover(tab){
  var tab = document.querySelector(tab);
  var tabOpen = document.querySelectorAll('.toggle-ppv');
  tabOpen.forEach(element => {
    element.style.display = "none";
  });
  tab.style.display = "block";
}
//==================TOGGLE NAV MOBILE==================================
const feedlinks = document.querySelector('.feed-links');
const hamburger = document.querySelector('.hamburger');
const closeBtn = document.querySelector('.close-btn');
if(hamburger){
  hamburger.addEventListener("click",()=>{
    feedlinks.classList.toggle("open");
  });
  closeBtn.addEventListener("click",()=>{
    feedlinks.classList.toggle("open");
  });
}
//===================SCROLL EVENT=======================
var topBtn = document.querySelector(".top-btn");
var avt_side = document.querySelector(".avatar--side");
window.onscroll = function(){scrollFunction()};
function scrollFunction() {
  myScrollY(topBtn,300,"flex");
  myScrollY(avt_side,200,"inline");

}
topBtn.addEventListener("click",goToTop);
function myScrollY(element,y,display){
  if (document.body.scrollTop > y || document.documentElement.scrollTop > y) {
    element.style.display = display;
  } else {
    element.style.display = "none";
  }
}
function goToTop(){
  document.body.scrollTop = 0;
  document.documentElement.scrollTop =0;
}
  //==================TAB===============================
  function openTab(e,tab){
    var i,tabLink,tabContent;
    tabContent = document.querySelectorAll(".tab__pane");
    for(i = 0;i < tabContent.length; i++){
      tabContent[i].style.display = "none";
    }
    tabLink = document.querySelectorAll(".tab-item");
    for(i = 0;i< tabLink.length; i++){
      tabLink[i].className = tabLink[i].className.replace(" active", "");
    }
    document.getElementById(tab).style.display = "block";
    e.target.className += " active";
    const previewTab = document.querySelector(".comment-thread #previewTab");
    if (e.target.getAttribute('id') == previewTab.getAttribute('id')) {

    const commentDOMContent = document.getElementsByClassName("ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred")[0];
    document.querySelector("#preview-tab").append(commentDOMContent);
    console.log(commentDOMContent);
    }

  }
  //document.getElementById("default-comment__tab").click();

//====================CKEDITOR===========================
ClassicEditor
  .create( document.querySelector( '#basic__editor' ) )
  .catch( error => {
      console.error( error );
  } );

ClassicEditor
  .create( document.querySelector("#post__editor"))
  .catch( error => {
    console.log(error);
});


// //====================Editor==============================
// //Comment - PREVIEW
// var comment = document.querySelector('.ck.ck-content p');
// var preview = document.querySelector('.comment__container #comment__review');
// //Validate

// //Input require
// function Validator
// var allInputs = document.querySelectorAll('input');
// allInputs.forEach(element => {
//   element.addEventListener('')
// });