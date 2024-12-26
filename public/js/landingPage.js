// ==================
// | PRELOAD IMAGES |
// ==================

function preloadImg(url) {
    new Image().src = url;
}

preloadImg('./img/illustration-features-tab-1.svg');
preloadImg('./img/illustration-features-tab-2.svg');
preloadImg('./img/illustration-features-tab-3.svg');

// =====================
// | MOBILE NAVIGATION |
// =====================

// SELECTORS

const body = document.querySelector('body');
const header = document.querySelector('.header');
const menuBtn = document.querySelector('.menu-btn');

// FUNCTIONS

function toggleMobileNav() {
    header.classList.toggle('mobile-nav--active');
}

function disableScroll() {
    body.classList.toggle('disable-scroll');
}

// EVENT LISTENER(S)

menuBtn.addEventListener('click', () => {
    toggleMobileNav();
    disableScroll();
});

// ========
// | TABS |
// ========

// SELECTORS

const featureSection = document.querySelector('.feature');
const tabs = document.querySelector('.tabs');
const featureHeading = document.querySelector('.feature__heading');
const featureDescription = document.querySelector('.feature__description');
const featureImg = document.querySelector('.feature__img');

// DATA

let features = [
    {
        heading: 'Just Write Simple Prompts',
        description:
            'Write only the symptoms about the problem and you will get very well  home remedy or deatils or doctor to consult with.',
        imgPath: 'https://www.svgrepo.com/show/509864/command-prompt.svg',
        altText: 'PROMPT SVG',
    },
    {
        heading: 'Speedy Analysis',
        description:
            'Due to integration of multiple LLM models and vast range of Datasets, the response comes with huge accuracy and extremely faster.',
        imgPath: 'https://cdn-icons-png.flaticon.com/512/4616/4616790.png',
        altText: 'Analysis SVG',
    },
    {
        heading: 'Chat History',
        description:
            'All your chat history is being saved so that you can track the progress and recovery and also it can be used to go through the previous problems and solutions.',
        imgPath: 'https://cdn-icons-png.flaticon.com/128/13874/13874995.png',
        altText: 'Chat History SVG',
    },
];

// FUNCTIONS

function changeTab(index) {
    function changeContent(index) {
        featureHeading.textContent = features[index].heading;
        featureDescription.textContent = features[index].description;
        featureImg.src = features[index].imgPath;
        featureImg.alt = features[index].altText;
    }

    featureSection.classList.add('fade-out');

    setTimeout(() => {
        changeContent(index);
        featureSection.classList.remove('fade-out');
    }, 1000);
}

function changeTabs(e) {
    for (tab of tabs.children) {
        tab.classList.remove('tabs__tab--active');
    }

    e.target.classList.add('tabs__tab--active');

    if (e.target.id === 'tab-1') {
        changeTab(0);
    } else if (e.target.id === 'tab-2') {
        changeTab(1);
    } else if (e.target.id === 'tab-3') {
        changeTab(2);
    }
}

// EVENT LISTENERS

tabs.addEventListener('click', (e) => {
    changeTabs(e);
});

tabs.addEventListener('keypress', (e) => {
    if (e.keyCode === 13) {
        changeTabs(e);
    }
});

// =================
// | RIPPLE EFFECT |
// =================

// SELECTORS

const loginBtn = document.querySelector('.header__nav__link--login');
const btns = document.querySelectorAll('.btn');

// FUNCTION(S)

function addRippleEffect(e) {
    e.addEventListener('click', (e) => {
        let boundingBox = e.target.getBoundingClientRect();
        let x = e.clientX - boundingBox.left;
        let y = e.clientY - boundingBox.top;

        let ripple = document.createElement('span');
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        ripple.classList.add('ripple');

        e.target.appendChild(ripple);

        setTimeout(() => {
            ripple.remove();
        }, 800);
    });
}

// EVENT LISTENERS

addRippleEffect(loginBtn);

btns.forEach((btn) => {
    addRippleEffect(btn);
});

// ===============
// | ATTRIBUTION |
// ===============

const pop = new Audio('./audio/pop.mp3');
const whoosh = new Audio('./audio/whoosh.mp3');

const attribution = document.querySelector('.attribution');
const attributionImg = document.querySelector('.attribution__img');

attributionImg.addEventListener('click', () => {
    if (attribution.classList.contains('attribution-active')) {
        whoosh.play();
    } else {
        pop.play();
    }
    attribution.classList.toggle('attribution-active');
});

function scrollToSection(event, id) {
    event.preventDefault();
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  }


function showToast(type, message){

    if(type){
        Toastify({
            text: message,
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "#19d819"
        }).showToast();
    }

    else{
        Toastify({
            text: message,
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "rgb(255 0 40)"
        }).showToast();
    }
}
