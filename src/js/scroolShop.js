let NbtSlide = 0;
let idSlideCenter = 0;
let scale = ['1', '.8', '.6', '.4'];

let slides = document.querySelectorAll('.sliderOffres span');
slides.forEach(function (e) {
    e.id = ++NbtSlide;
})
let sliderScale = 0;

if (NbtSlide % 2 !== 0) {
    sliderScale = (NbtSlide - 1) / 2;
} else {
    sliderScale = NbtSlide / 2;
}

function positionSlide() {
    for (let i = 0; i <= sliderScale; i++) {
        if(i === 0) {
            let slide = document.getElementById(''+(sliderScale + 1)+'');
            slide.style = '--i:' + i + ';';
            setTimeout(() => {
                slide.classList.add('center');
            }, 200)
        }else {
            let slideG = document.getElementById(''+((sliderScale + 1) - i)+'');
            let translate = 38 - ((i * i) + i);
            slideG.style = '--o:' + i + 'px;--z:' + ((sliderScale + 1) - i) + ';--i:' + (i * -1) + ';--s:' + i + ';--v:'+ translate +';';
            slideG.classList.remove('center');
            if(((sliderScale + 1) + i) <= NbtSlide) {
                let slideD = document.getElementById(''+((sliderScale + 1) + i)+'');
                slideD.style = '--o:' + i + 'px;--z:' + ((sliderScale + 1) - i) + ';--i:' + i + ';--s:' + i + ';--v:'+ translate +';';
                slideD.classList.remove('center');
            }
        }
    }
    setTimeout(() => {
        slides.forEach(function (slideClass) {
            slideClass.classList.remove('invisible')
        })
    }, 200);
}
positionSlide();


const flechesLeft = document.querySelector('.fleches .arrowLeft');
const flechesRight = document.querySelector('.fleches .arrowRight');

flechesLeft.addEventListener('click', () => {
    let val = -1;
    slideLeft(val);
})
flechesRight.addEventListener('click', () => {
    let val = 1;
    slideRight(val);
})
slides.forEach(function (slide) {
    slide.addEventListener('click', () => {
        let valSlider = (sliderScale + 1) - slide.id;
        if(valSlider < 0) {
            slideLeft(valSlider);
        }else if(valSlider > 0) {
            slideRight(valSlider);
        }
    })
})

function slideLeft (valSlider) {
    for (let i = valSlider; i < 0; i++) {
        slides.forEach(function (slide) {
            let slideId = parseInt(slide.id);
            slide.id = slideId - 1;
            if(slide.id < '1') {
                slide.id = NbtSlide;
                slide.classList.add('invisible');
            }
        })
        setTimeout(() => {
            positionSlide();
        }, 100)
    }
}

function slideRight (valSlider) {
    for (let i = 1; i <= valSlider; i++) {
        slides.forEach(function (slide) {
            let slideId = parseInt(slide.id);
            slide.id = slideId + 1;
            if(slide.id > NbtSlide) {
                slide.id = '1';
                slide.classList.add('invisible');
            }
        })
        setTimeout(() => {
            positionSlide();
        }, 100)
    }
}


/* --- tactile --- */


let toucheboxSliderSpeakBlue = document.querySelector('.sliderOffres');
let down = false;
let notImg = true;
let retX = 0;
let mouveX = 0;
let valBaseSlider = 10;
toucheboxSliderSpeakBlue.addEventListener('touchstart', function (e) {
    down = true;
    mouveX = onTouch(e)
})
toucheboxSliderSpeakBlue.addEventListener('touchend', () => {
    down = false;
    if (retX >= valBaseSlider) {
        console.log('<==');
        let val = -1;
        slideLeft(val);
    }else if (retX <=(valBaseSlider * -1)) {
        console.log('==>');
        let val = 1;
        slideRight(val);
    }
    retX = 0;
})
toucheboxSliderSpeakBlue.addEventListener('touchmove', (e) => {
    if (down && notImg) {
        retX = mouveX - onTouch(e);
        // console.log(retX)
        slides[0].classList.add('move');
        slides[1].classList.add('move');
        slides[2].classList.add('move');
        for (let i = 0; i <= sliderScale; i++) {
            if(i === 0) {
                let scaleTranslate = (retX >= 0) ? ((retX > 20) ? 20 : retX) : ((retX < -20) ? -20 : retX);
                let scaleSwap = (scaleTranslate < 0) ? (scaleTranslate * -1) : scaleTranslate;
                let slide = document.getElementById('' + (sliderScale + 1) + '');
                slide.style = '--i:' + i + ';';
                slide.style = '--o:' + i + 'px;--z:' + ((sliderScale + 1) - i) + ';--i: -1;--s:' + (scaleSwap / 60)+ ';--v:' + (scaleTranslate / 2) + ';';
            }
        }
    }
})

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



















