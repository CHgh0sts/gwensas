//
// const range = document.querySelector('.sliderRange');
//
// range.addEventListener('mousemove', () => {
//
// })

const btnSliderLeft = document.querySelector('.btnSlider ul.btn li button.left');
const btnSliderRight = document.querySelector('.btnSlider ul.btn li button.right');
const sliderCloudBox = document.querySelector('.sliderCloudBox');


let slideCloud = document.querySelectorAll('.slideCloud');

let pointSlider = document.querySelector('.btnSlider ul.point');
let valPosPointSlider = 0;

slideCloud.forEach(function (slide) {
    ++valPosPointSlider;
    slide.id = valPosPointSlider;
    pointSlider.innerHTML += '<li class="liSlider' + valPosPointSlider + '"></li>';
})

let pointSliderLi = document.querySelectorAll('.btnSlider ul.point li');
function pointSliderLiF(val) {
    pointSliderLi.forEach((e) => {
        e.classList.remove('selected');
    })
    pointSliderLi[val - 1].classList.add('selected');
}
pointSliderLiF(1);

let theslide = 1;
let valTranslate = 0;
let heightBox = slideCloud[theslide - 1].clientHeight;

sliderCloudBox.style = '--l:' + valPosPointSlider + ';transform: translate(' + valTranslate + '%);height: ' + heightBox + 'px;';

btnSliderLeft.addEventListener('click', (r) => {
    if (theslide > 1) {
        theslide--;
        pointSliderLiF(theslide);
        btnSliderRight.classList.remove('none');
        btnSliderLeft.classList.remove('none');
        valTranslate = valTranslate + (100 / valPosPointSlider);
        heightBox = slideCloud[theslide - 1].clientHeight;
        sliderCloudBox.style = '--l:' + valPosPointSlider + ';transform: translate(' + valTranslate + '%);height: ' + heightBox + 'px;';
    }if (theslide === 1) {
        btnSliderLeft.classList.add('none');
    }
})

btnSliderRight.addEventListener('click', (r) => {
    if (theslide < valPosPointSlider) {
        theslide++;
        pointSliderLiF(theslide);
        btnSliderRight.classList.remove('none');
        btnSliderLeft.classList.remove('none');
        valTranslate = valTranslate - (100 / valPosPointSlider);
        heightBox = slideCloud[theslide - 1].clientHeight;
        sliderCloudBox.style = '--l:' + valPosPointSlider + ';transform: translate(' + valTranslate + '%);height: ' + heightBox + 'px;';
    }if (theslide === valPosPointSlider) {
        btnSliderRight.classList.add('none');
    }
})