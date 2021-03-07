const DURATION="350ms";
const INTERVAL=3000;
var index=1;
var isAutoPlay;
var innerBox=document.querySelector(".inner-box");
var slideNum=document.querySelectorAll('.slide-ele').length;

var moveWidth=document.querySelector('.inner-box').offsetWidth;
var currentOffset=moveWidth;
var dotItems = document.querySelectorAll('.dots');

var animate;
function changeDotsStyle() {
 document.querySelector('.dots.dots-active').classList.remove('dots-active');
  if(index==slideNum){
    dotItems[0].classList.add('dots-active');
  }else{
    dotItems[index - 1].classList.add('dots-active');
  }
}

function carousel(dur=DURATION){
  innerBox.addEventListener('transitionend', () => {
  if(index==slideNum+1){
index=1;
currentOffset = moveWidth;
changeBoxLoc(0,"0ms");
}
} )
if(index<=slideNum){

currentOffset = moveWidth * (index-1);
changeBoxLoc(-currentOffset,dur);
index++;
}

  
}
function changeBoxLoc(offset,duration="0ms"){
  changeDotsStyle() ;
  innerBox.style.transform=`translateX(${offset}px)`;
  innerBox.style.transitionDuration=duration;
}


function autoPlay(){
  if(isAutoPlay){ return; }
  isAutoPlay = true;
  animate=setInterval(carousel,INTERVAL)
}

function stopAutoPlay() {
  if(!isAutoPlay){ return; }
  isAutoPlay = false;
  clearInterval(animate);
}

function dotsControl() {
  for(dot of dotItems){
    dot.addEventListener("click", (e) => {
      stopAutoPlay();
      index = e.target.getAttribute('dots-index') ;
      //console.log(index);
      carousel();
      autoPlay();
    });
  } 
}


function changePageStyle(){
  var bodyTag=document.getElementsByTagName("body")[0];
  bodyTag.onclick=function(){
    var balloon=document.getElementsByClassName("balloon")[0];
    //balloon.style.animation='jumpout 1.2s ease ';
    var firstPage=document.getElementsByClassName("first-page");
    var secondPage=document.getElementsByClassName("second-page");
    for(let i=0;i<firstPage.length;i++){
      firstPage[i].style.animation='jumpout 1.2s 1';
     setTimeout(function(){
      firstPage[i].style.display='none';
     },1200);
    }
    for(let i=0;i<secondPage.length;i++){
      setTimeout(function(){
        secondPage[i].style.display='block';
        moveWidth=document.querySelector('.slide-ele').offsetWidth+0.7;
       },1200);
    }
    bodyTag.onclick=null;
  }
 
}


function changeLogin(){
loginTitle=document.querySelectorAll('.login-title');
loginForm=document.querySelectorAll('.login-form');
for(tit of loginTitle)
{
  tit.addEventListener("click",(e)=>{
    titleIndex=e.target.getAttribute('title-index')
    formIndex=document.querySelector('.form-active').getAttribute('form-index');
    if(titleIndex!=formIndex){
    activeTitle=document.querySelector('.login-active').classList.remove('login-active');
    activeForm=document.querySelector('.form-active').classList.remove('form-active');
    loginTitle[titleIndex-1].classList.add('login-active')
    loginForm[titleIndex-1].classList.add('form-active');
    }
  })
}
}


window.onload = function() {
  changeLogin();
  changePageStyle();
  autoPlay();
  dotsControl();

}
