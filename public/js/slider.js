/**
 * Created by Parham on 9/21/2016.
 */
var content = document.querySelector('.slider');
var slides = document.querySelectorAll('.slider-container img');
var slideNumber = slides.length;
var i = 0;
var interval;
var next = document.querySelector('.btn_next');
var prev = document.querySelector('.btn_prev');
//var ul = document.querySelector('.indicator ul');
function slide () {
    interval = setInterval(function () {
        i++;
        if(i == slideNumber){
            i = 0;
        }
        document.querySelector('.slider-container img.selected').classList.remove('selected');
        slides[i].classList.add('selected');
//        document.querySelector('.indicator ul li.select').classList.remove('select');
//        liNumber[i].classList.add('select');
    }, 4000);
}
slide();
/* next btn */
next.onclick = function toNext() {
    i++;
    if(i == slideNumber){
        i = 0;
    }
    document.querySelector('.slider-container img.selected').classList.remove('selected');
    slides[i].classList.add('selected');
//    document.querySelector('.indicator ul li.select').classList.remove('select');
//    liNumber[i].classList.add('select');
}
/* prev btn */
prev.onclick = function toPrev() {
    if (i == 0) {
        i = slideNumber;
    }
    i--;
    document.querySelector('.slider-container img.selected').classList.remove('selected');
    slides[i].classList.add('selected');
//    document.querySelector('.indicator ul li.select').classList.remove('select');
//    liNumber[i].classList.add('select');
}
/* onmouseover event */
content.onmouseover = function enter() {
    clearInterval(interval);
}
/* onmouseout event */
content.onmouseout = function exit() {
    slide();
}
/* append li to ul */
/*for (var j = 0 ; j < slideNumber ; j++) {
    var li = document.createElement('li');
    ul.appendChild(li);
}
ul.childNodes[1].className = "select";
var liNumber = document.querySelectorAll('.indicator ul li');*/
/* ID to Image And Li Element */
/*for (var k = 1 ; k <= slideNumber ; k++ ){
    slides[k-1].id = "img-" + k;
    var li = document.querySelectorAll('.indicator ul li').item(k-1);
    li.id = "indicator-" + k;
    li.setAttribute("onclick", "ClickIndicator(event)");
}*/
/* click indicator event */
/*function ClickIndicator(e) {
    var element = e.target || e.srcElement;
    var id_number = parseInt(element.getAttribute("id").replace("indicator-", ""));
    i = id_number-1;
    document.querySelector('.slider-container img.selected').classList.remove('selected');
    slides[i].classList.add('selected');
    document.querySelector('.indicator ul li.select').classList.remove('select');
    liNumber[i].classList.add('select');
}*/
