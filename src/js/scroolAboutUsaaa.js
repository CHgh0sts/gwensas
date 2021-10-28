const arrowLeftSlider = document.querySelector('.arrowLeft');
const arrowRightSlider = document.querySelector('.arrowRight');
const sliderSpeak = document.querySelector('.sliderSpeak');
let NbtSlide = 0;
let tabDeTest = [];
let tabDeTestIMG = [];
let tempsTab = [];
let i = -1;
let j = -1;
let theSlide = 0;
/*--- IMG ---*/
let nbtImg = 0;
let ValSliderImg = 0;

let slideSpeakBlue = document.querySelectorAll('.slideSpeakBlue');
slideSpeakBlue.forEach(function (e) {
    let slideSpeakBlueIMG = e.querySelectorAll('.slideImgBlue');
    slideSpeakBlueIMG.forEach(function (z) {
        let k = -1;
        tempsTab = [];
        z.querySelectorAll('nav').forEach((imgSlide) => {
            tempsTab[++k] = imgSlide.innerHTML;
        })
        z.innerHTML = '<div class="slideSpeakBlueIMG"></div><div class="slideSpeakBlueIMG boxVisible"> </div> <div class="slideSpeakBlueIMG"></div>';
    })
    tabDeTestIMG[++i] = tempsTab;
    tabDeTest[i] = e.innerHTML;

})

let tailTab = tabDeTest.length;
let tailTabImg = tabDeTestIMG[0].length;

document.querySelector('.sliderSpeak').innerHTML = '<div class="slideSpeakBlue"></div><div class="slideSpeakBlue boxVisible"> </div> <div class="slideSpeakBlue"></div>';

let slides = document.querySelectorAll('.slideSpeakBlue');
slides.forEach(function (e) {
    ++NbtSlide;
})
let arrowLeftSliderIMG = slides[1].querySelector('.arrowLeftImg');
let arrowRightSliderIMG = slides[1].querySelector('.arrowRightImg');

let a = tailTab - 2;
let b = -1;
let c = 0;

let d = tailTabImg - 1;
let e = 0;
let f = 1;

slides[0].style = '--z: -5;--translate: -100;';
slides[1].style = '--z: 5;--translate: 0;';
slides[2].style = '--z: 5;--translate: 100;';

changeInner('+');

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
        ((a + 1) >= tailTab || (a + 1 ) < 0) ? a = 0 : a++;
        ((b + 1) >= tailTab) ? b = 0 : b++;
        ((c + 1) >= tailTab) ? c = 0 : c++;
    } else {
        ((a - 1) < 0) ? a = (tailTab - 1) : a--;
        ((b - 1) < 0) ? b = (tailTab - 1) : b--;
        ((c - 1) < 0) ? c = (tailTab - 1) : c--;
    }
    slides[0].innerHTML = tabDeTest[a];
    slides[1].innerHTML = tabDeTest[b];
    slides[2].innerHTML = tabDeTest[c];

    nbtImg = 0;
    ValSliderImg = 0;
    arrowLeftSliderIMG = slides[1].querySelector('.arrowLeftImg');
    arrowRightSliderIMG = slides[1].querySelector('.arrowRightImg');
    tailTabImg = tabDeTestIMG[b].length;
    d = tailTabImg - 1;
    e = 0;
    f = 1;

    let slidesImgInc1 = slides[0].querySelectorAll('.slideSpeakBlueIMG');
    let slidesImgInc2 = slides[1].querySelectorAll('.slideSpeakBlueIMG');
    let slidesImgInc3 = slides[2].querySelectorAll('.slideSpeakBlueIMG');

    slidesImgInc1[0].innerHTML = tabDeTestIMG[a][f];
    slidesImgInc1[1].innerHTML = tabDeTestIMG[a][d];
    slidesImgInc1[2].innerHTML = tabDeTestIMG[a][e];

    slidesImgInc2[0].innerHTML = tabDeTestIMG[b][d];
    slidesImgInc2[1].innerHTML = tabDeTestIMG[b][e];
    slidesImgInc2[2].innerHTML = tabDeTestIMG[b][f];

    slidesImgInc3[0].innerHTML = tabDeTestIMG[c][f];
    slidesImgInc3[1].innerHTML = tabDeTestIMG[c][d];
    slidesImgInc3[2].innerHTML = tabDeTestIMG[c][e];

    slidesImgInc2[0].style = '--z: -5;--translate: -100;';
    slidesImgInc2[1].style = '--z: 5;--translate: 0;';
    slidesImgInc2[2].style = '--z: 5;--translate: 100;';

    arrowRightSliderIMG.addEventListener('click', () => {
        ClickRightImg();
    })
    arrowLeftSliderIMG.addEventListener('click', () => {
        ClickLeftImg();
    })
}

function autoSlide(val) {
    setTimeout(() => {
        val--;
        if (val !== b) {
            a = val - 2
            b = val - 1;
            c = val;


            slides[2].innerHTML = tabDeTest[val];

            let slidesImgInc3 = slides[2].querySelectorAll('.slideSpeakBlueIMG');

            slidesImgInc3[0].innerHTML = tabDeTestIMG[c][f];
            slidesImgInc3[1].innerHTML = tabDeTestIMG[c][d];
            slidesImgInc3[2].innerHTML = tabDeTestIMG[c][e];

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
    }, 600);
}
arrowRightSlider.addEventListener('click', () => {
    slideScale('+');
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

/*-----------------------------------------------------------------------------------------------------------*/

function slideScaleImg(val) {
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


function  changeInnerImg(val) {
    if (val === '+') {
        ((d + 1) >= tailTabImg) ? d = 0 : d++;
        ((e + 1) >= tailTabImg) ? e = 0 : e++;
        ((f + 1) >= tailTabImg) ? f = 0 : f++;
    } else {
        ((d - 1) < 0) ? d = (tailTabImg - 1) : d--;
        ((e - 1) < 0) ? e = (tailTabImg - 1) : e--;
        ((f - 1) < 0) ? f = (tailTabImg - 1) : f--;
    }

    let slidesImgInc = slides[1].querySelectorAll('.slideSpeakBlueIMG');

    slidesImgInc[0].innerHTML = tabDeTestIMG[b][d];
    slidesImgInc[1].innerHTML = tabDeTestIMG[b][e];
    slidesImgInc[2].innerHTML = tabDeTestIMG[b][f];
}

function ClickRightImg() {
    let slidesImg = slides[1].querySelectorAll('.slideSpeakBlueIMG');
    slideScaleImg('+');
    slidesImg[1].classList.add('move');
    slidesImg[2].classList.add('move');
    slidesImg[1].style = '--z: -5;--translate: -100;';
    slidesImg[2].style = '--z: 5;--translate: 0;';
    setTimeout(() => {
        slidesImg[1].classList.remove('move');
        slidesImg[2].classList.remove('move');
        changeInnerImg('+');
        slidesImg[1].style = '--z: 5;--translate: 0;';
        slidesImg[2].style = '--z: -5;--translate: 100;';
    },300)
}

function ClickLeftImg() {
    let slidesImg = slides[1].querySelectorAll('.slideSpeakBlueIMG');
    slideScaleImg('-');
    slidesImg[1].classList.add('move');
    slidesImg[0].classList.add('move');
    slidesImg[1].style = '--z: -5;--translate: 100;';
    slidesImg[0].style = '--z: 5;--translate: 0;';
    setTimeout(() => {
        slidesImg[1].classList.remove('move');
        slidesImg[0].classList.remove('move');
        changeInnerImg('-');
        slidesImg[1].style = '--z: 5;--translate: 0;';
        slidesImg[0].style = '--z: -5;--translate: -100;';
    },300)
}