let body = document.querySelector('body');
let lang = document.querySelector('.lang');

lang.addEventListener('click', () => {
    lang.querySelector('ul').classList.toggle('openlang');
})

/*------- EntrePage ----------*/

document.querySelectorAll('object').forEach((object) => {
    object.innerHTML = object.data;
})

const EntrePage = document.querySelector('section.EntrePage');
const EntrePageBefore = document.querySelector('section.EntrePage .before');
window.addEventListener('load', () => {
    console.log('Js Load !!');
    EntrePage.style.transform = "translate(0,-100%)";
    EntrePageBefore.style.top = "20vh";
    setTimeout(() => {
        document.querySelector('body').style.overflowY = "initial";
    }, 400)
})
let BtnLien = document.querySelectorAll('a.redirection');
let LienBtnMenB = document.querySelectorAll('nav.menu ul li.MenuLien');


LienBtnMenB.forEach((lien) => {
    let BtnHref = lien.querySelector('a');
    let supSlash = document.location.href.split('/');
    let btnSplit = BtnHref.href.split('/');
    console.log('btn => ' + btnSplit[btnSplit.length - 1] + '/ href => ' + supSlash[supSlash.length - 1])
    if (btnSplit[btnSplit.length - 1] === supSlash[supSlash.length - 1] && BtnHref.href !== "#") {
        lien.classList.add('myPage');
    }else {
        console.log(supSlash[supSlash.length - 1])
    }
})

BtnLien.forEach((href) => {
    href.addEventListener('click', (e) => {
        e.preventDefault();
        let prefix = "http://localhost:63342/style.css/gwen/";
        console.log("Click sur un lien !!! => " + href.href)
        // let verif = "http://gwencloud.w3box.fr/none.php";
        let verif = prefix + "none.php";
        let comming = prefix + "comming.php";
        if (href.href !== verif && href.href !== comming && href.href !== document.location.href) {
            document.querySelector('body').style.overflowY = "hidden";
            EntrePage.style.transform = "translate(0,0)";
            EntrePageBefore.style.top = "0";
            setTimeout(() => {
                window.location = href.href;
            }, 400)
        }else if(href.href === comming) {
            alert('Coming Soon !');
        }
    })
})

 function PreventDef(e) {
    console.log(e)
}
/* -------- Contact Us ------- */
function ContactUs() {
    let closePopup = 0;
    let popupback = document.querySelector('.popupback');
    let popup = document.querySelector('.popup');
    popupback.classList.add('open');
    popupback.classList.remove('close');
    setTimeout(() => {
        document.querySelector('body').style.overflowY = "hidden";
    },100)
    setTimeout(() => {
        popup.style = 'transform: translateY(0)';
    }, 700)
    popup.addEventListener('click', () => {
        closePopup = 1;
    })
    popupback.addEventListener('click', () => {
        console.log(closePopup)
        if(closePopup === 0) {
            popup.style = 'transform: translateY(-100vh)';
            setTimeout(() => {
                popupback.classList.add('close');
                popupback.classList.remove('open');
                setTimeout(() => {
                    document.querySelector('body').style.overflowY = "initial";
                },100)
                setTimeout(() => {
                    popup.style = 'transform: translateY(100vh)';
                }, 700)
            },300)
        }
        closePopup = 0;
    })
}
function ContactUsVid() {
    let closePopup = 0;
    let popupback = document.querySelector('.popupback');
    let popup = document.querySelector('.popup');
    popup.innerHTML = '<iframe src="https://www.youtube.com/embed/EWf-CxLZCcg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    popupback.classList.add('open');
    setTimeout(() => {
        document.querySelector('body').style.overflowY = "hidden";
    },100)
    popup.addEventListener('click', () => {
        closePopup = 1;
    })
    popupback.addEventListener('click', () => {
        console.log(closePopup)
        if(closePopup === 0) {
            setTimeout(() => {
                popupback.classList.remove('open');
                setTimeout(() => {
                    document.querySelector('body').style.overflowY = "initial";
                    popup.innerHTML = '<iframe src="https://www.youtube.com/embed/EWf-CxLZCcg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
                },300)
            },300)
        }
        closePopup = 0;
    })
}
function ContactUsVidChallenges() {
    let closePopup = 0;
    let popupback = document.querySelector('.popupback');
    let popup = document.querySelector('.popup');
    popup.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/eI4EjvSk1W4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
    popupback.classList.add('open');
    setTimeout(() => {
        document.querySelector('body').style.overflowY = "hidden";
    },100)
    popup.addEventListener('click', () => {
        closePopup = 1;
    })
    popupback.addEventListener('click', () => {
        console.log(closePopup)
        if(closePopup === 0) {
            setTimeout(() => {
                popupback.classList.remove('open');
                setTimeout(() => {
                    document.querySelector('body').style.overflowY = "initial";
                    popup.innerHTML = '<iframe width="560" height="315" src="https://www.youtube.com/embed/eI4EjvSk1W4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
                },300)
            },300)
        }
        closePopup = 0;
    })
}
function ReadMore() {
    let readMoreP = document.querySelector('.readMoreF');
    readMoreP.classList.toggle('readMoreP');
}
// let textP = document.querySelectorAll('p.animscrool');


let slider = document.querySelectorAll('.slider');
let isDown = false;
let startX;
let scrollLeft;
let mouv = 0;

for (let i = 0;i < slider.length; i++) {
    if (window.innerWidth > 1000) {
        slider[i].scrollLeft = 370;
    }
    slider[i].addEventListener('mousedown', (e) => {
        isDown = true;
        slider[i].classList.add('selected');
        startX = e.clientX;
        scrollLeft = slider[i].scrollLeft;
    })
    slider[i].addEventListener('mouseout', (e) => {
        if(isDown) {
            slider[i].classList.remove('selected');
            if (mouv > 30) {
                if(slider[i].scrollLeft > 370) {
                    if (mouv > 369) {
                        slider[i].scrollLeft = 0;
                    }else {
                        slider[i].scrollLeft = scrollLeft - 370;
                    }
                }else {
                    slider[i].scrollLeft = 0;
                }
                scrollLeft = slider[i].scrollLeft;
            }else if (mouv < -30) {
                if(slider[i].scrollLeft < 740) {
                    if (mouv < -399) {
                        slider[i].scrollLeft = 740;
                    }else {
                        slider[i].scrollLeft = scrollLeft + 370;
                    }
                }else {
                    slider[i].scrollLeft = 740;
                }
                scrollLeft = slider[i].scrollLeft;
            }else {
                slider[i].scrollLeft = scrollLeft;
            }
        }
        mouv = 0;
        isDown = false;
    })
    slider[i].addEventListener('mouseup', (e) => {
        if(isDown) {
            slider[i].classList.remove('selected');
            if (mouv > 30) {
                if(slider[i].scrollLeft > 370) {
                    if (mouv > 369) {
                        slider[i].scrollLeft = 0;
                    }else {
                        slider[i].scrollLeft = scrollLeft - 370;
                    }
                }else {
                    slider[i].scrollLeft = 0;
                }
                scrollLeft = slider[i].scrollLeft;
            }else if (mouv < -30) {
                if(slider[i].scrollLeft < 740) {
                    if (mouv < -399) {
                        slider[i].scrollLeft = 740;
                    }else {
                        slider[i].scrollLeft = scrollLeft + 370;
                    }
                }else {
                    slider[i].scrollLeft = 740;
                }
                scrollLeft = slider[i].scrollLeft;
            }else {
                slider[i].scrollLeft = scrollLeft;
            }
        }
        mouv = 0;
        isDown = false;
    })
    slider[i].addEventListener('mousemove', (e) => {
        if (!isDown) return;
        mouv = (e.clientX - startX) * 2;
        slider[i].scrollLeft = scrollLeft - mouv;
    })
}

//---------------------- anim menu ----------------------

const menuBlur = document.querySelectorAll('.menuBlur');
const BackgroundMenu = document.querySelector('nav.menu');
const btnMenu = document.querySelector('.btnMenu');
const menuUl = document.querySelector('nav.menu ul ');
let x = false;

btnMenu.addEventListener('click', () => {
    btnMenu.classList.toggle('active');
    if (!x) {
        menuUl.style.height = '24vh';
        BackgroundMenu.classList.add('openMenu');
        menuBlur.forEach((blur) => {
            blur.style.filter = "blur(10px)";
        })
        x = true;
    }else {
        menuUl.style.height = '0';
        setTimeout(() => {
            BackgroundMenu.classList.remove('openMenu');
        },100)
        menuBlur.forEach((blur) => {
            blur.style.filter = "blur(0)";
        })
        x = false;
    }
})

let scroll = 0;
const menu = document.querySelector('.menu');
const scroolAnim = document.querySelector('.scroolAnim');
window.addEventListener('scroll', () => {
    scroolAnim.style.opacity = (1 - (window.scrollY / 100))
    menuBlur.forEach((blur) => {
        blur.style.filter = "blur(0)";
    })
    if(window.scrollY > 91) {
        menu.classList.add('menuFixed');
        if (scroll > window.scrollY) {
            menu.style.transition = 'top .3s';
            menu.style.top = '0';
        }else {
            menu.style.top = '-7vh';
            menu.style.transition = '0';
            document.querySelector('.btnMenu').classList.remove('active');
            document.querySelector('.menu ul').style.height = '0';
            x = false;
        }
    }else {
        menu.classList.remove('menuFixed');
    }
    scroll = window.scrollY;
})

function arrowScrool() {
    let chat = document.querySelector('.sc-fzXfNP');
    if(window.scrollY > 0) {
        arrowUp.style = 'display: flex; opacity: 1;';
        chat.style = "margin-right: 7vh;"
    }else {
        arrowUp.style = 'display: flex; opacity: 0;';
        setTimeout(() => {
            arrowUp.style = 'display: none; opacity: 0;';
            chat.style = "margin-right: 1vh;"
        },300);
    }
}

let arrowUp = document.querySelector('.arrowUp');
window.addEventListener('scroll', () => {
    arrowScrool();
})
window.addEventListener('load',() => {
    arrowScrool();
})