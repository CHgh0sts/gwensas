const arrowLeftSlider = document.querySelector('.arrowLeft');
const arrowRightSlider = document.querySelector('.arrowRight');
const sliderSpeak = document.querySelector('.sliderSpeak');
let NbtSlide = 0;
let tabDeTest = [];
let i = -1;
let theSlide = 0;

let slideSpeakBlue = document.querySelectorAll('.slideSpeak');
slideSpeakBlue.forEach(function (e) {
    tabDeTest[++i] = e.innerHTML;
})

let tailTab = tabDeTest.length;

document.querySelector('.sliderSpeak').innerHTML = '<div class="slideSpeak"></div><div class="slideSpeak boxVisible"> </div><div class="slideSpeak"></div>';

let slides = document.querySelectorAll('.slideSpeak');
slides.forEach(function () {
    ++NbtSlide;
})

let a = tailTab - 1;
let b = 0;
let c = 1;

slides[0].style = '--z: -5;--translate: -100;';
slides[1].style = '--z: 5;--translate: 0;';
slides[2].style = '--z: 5;--translate: 100;';

slides[0].innerHTML = tabDeTest[a];
slides[1].innerHTML = tabDeTest[b];
slides[2].innerHTML = tabDeTest[c];

colorImgSlider(b - 1);

let scaleSlide = 0, slideImg;

function slideScale(val) {
    if(val === '+') {
        scaleSlide++;
    }else if(val === '-') {
        scaleSlide--;
    }
    if (scaleSlide < 0) {
        scaleSlide = tailTab - 1;
    }else if(scaleSlide >= tailTab) {
        scaleSlide = 0;
    }
}
function  changeInner(val) {
    if (val === '+') {
        ((a + 1) >= tailTab) ? a = 0 : a++;
        ((b + 1) >= tailTab) ? b = 0 : b++;
        ((c + 1) >= tailTab) ? c = 0 : c++;
    } else {
        ((a - 1) < 0) ? a = (tailTab - 1) : a--;
        ((b - 1) < 0) ? b = (tailTab - 1) : b--;
        ((c - 1) < 0) ? c = (tailTab - 1) : c--;
    }
    console.log(b);
    slides[0].innerHTML = tabDeTest[a];
    slides[1].innerHTML = tabDeTest[b];
    slides[2].innerHTML = tabDeTest[c];
}
function colorImgSlider(val) {
    console.log('val =>', val++)
    if (val > (tailTab - 1)) {
        val = 0;
    }else if(val < 0) {
        val = tailTab - 1;
    }
    let BtnImgSlider = document.querySelectorAll('.speak li img');
    BtnImgSlider.forEach((imgSlider) => {
        imgSlider.classList.remove('active');
    })
    BtnImgSlider[val].classList.add('active');
}


function autoSlide(val) {
    val--;
    if (val !== b) {
        a = val - 2
        b = val - 1;
        c = val;
        colorImgSlider(b);
        slides[2].innerHTML = tabDeTest[val];
        slides[1].classList.add('move');
        slides[2].classList.add('move');
        slides[1].style = '--z: -5;--translate: -100;';
        slides[2].style = '--z: 5;--translate: 0;';
        setTimeout(() => {
            slides[1].classList.remove('move');
            slides[2].classList.remove('move');
            changeInner('+');
            slides[1].style = '--z: 5;--translate: 0;';
            slides[2].style = '--z: -5;--translate: 100;';
        },300)
    }
}

arrowRightSlider.addEventListener('click', () => {
    slideScale('+');
    colorImgSlider(b);
    slides[1].classList.add('move');
    slides[2].classList.add('move');
    slides[1].style = '--z: -5;--translate: -100;';
    slides[2].style = '--z: 5;--translate: 0;';
    setTimeout(() => {
        slides[1].classList.remove('move');
        slides[2].classList.remove('move');
        changeInner('+');
        slides[1].style = '--z: 5;--translate: 0;';
        slides[2].style = '--z: -5;--translate: 100;';
    },300)
})
arrowLeftSlider.addEventListener('click', () => {
    slideScale('-');
    colorImgSlider(b - 2);
    slides[1].classList.add('move');
    slides[0].classList.add('move');
    slides[1].style = '--z: -5;--translate: 100;';
    slides[0].style = '--z: 5;--translate: 0;';
    setTimeout(() => {
        slides[1].classList.remove('move');
        slides[0].classList.remove('move');
        changeInner('-');
        slides[1].style = '--z: 5;--translate: 0;';
        slides[0].style = '--z: -5;--translate: -100;';
    },300)
})


/* --- tactile --- */


let toucheboxSliderSpeakBlue = document.querySelector('.boxSliderSpeak');
let down = false;
let notImg = true;
let retX = 0;
let mouveX = 0;
let valBaseSlider = 10;
toucheboxSliderSpeakBlue.addEventListener('touchstart', function (e) {
    down = true;
    mouveX = onTouch(e)
}, {passive: true})
toucheboxSliderSpeakBlue.addEventListener('touchend', () => {
    down = false;
    if (retX >= valBaseSlider) {
        console.log('<==');
        slideScale('+');
        slides[1].classList.add('move');
        slides[2].classList.add('move');
        slides[0].style = '--z: 5;--translate: -100;';
        slides[1].style = '--z: -5;--translate: -100;';
        slides[2].style = '--z: 5;--translate: 0;';
        setTimeout(() => {
            slides[0].classList.remove('move');
            slides[1].classList.remove('move');
            slides[2].classList.remove('move');
            changeInner('+');
            slides[1].style = '--z: 5;--translate: 0;';
            slides[2].style = '--z: -5;--translate: 100;';
        },300)
    }else if (retX <=(valBaseSlider * -1)) {
        console.log('==>');
        slideScale('-');
        slides[1].classList.add('move');
        slides[0].classList.add('move');
        slides[1].style = '--z: -5;--translate: 100;';
        slides[2].style = '--z: -5;--translate: 100;';
        slides[0].style = '--z: 5;--translate: 0;';
        setTimeout(() => {
            slides[1].classList.remove('move');
            slides[2].classList.remove('move');
            slides[0].classList.remove('move');
            changeInner('-');
            slides[1].style = '--z: 5;--translate: 0;';
            slides[0].style = '--z: -5;--translate: -100;';
        },300)
    }
    retX = 0;
}, {passive: true})
toucheboxSliderSpeakBlue.addEventListener('touchmove', (e) => {
    if (down && notImg) {
        retX = mouveX - onTouch(e);
        // console.log(retX)
        slides[0].classList.add('move');
        slides[1].classList.add('move');
        slides[2].classList.add('move');
        if ( retX <= 100 && retX >= -100) {
            slides[0].style = '--z: 5;--translate: ' + (-100 + (retX * -1)) + ';';
            slides[1].style = '--z: -5;--translate: ' + (retX * -1) + ';';
            slides[2].style = '--z: 5;--translate: ' + (100 + (retX * -1)) + ';';
        }
    }
}, {passive: true})

function onTouch(evt) {
    if (evt.touches.length > 1 || (evt.type === "touchend" && evt.touches.length > 0))
        return 0;

    let type = null, touch = null;
    switch (event.type) {
        case "touchstart": type = "mousedown"; touch = event.changedTouches[0];
        case "touchmove":  type = "mousemove"; touch = event.changedTouches[0];
        case "touchend":   type = "mouseup"; touch = event.changedTouches[0];
    }
    return (touch.clientX);
}

