const right = document.querySelector('.right');
const left = document.querySelector('.left');
const slider = document.querySelector('.slider');
const sliderContainer = document.querySelector('.slider-container');
const linesParent = document.querySelector('.lines-controls .lines');
var index = 0;

// Fonctions pour reset les opacity
function resetOpacity() {
    for (let i = 0; i < slider.children.length; i++) {
        const element = slider.children[i];
        element.style.zIndex = 0;
        element.style.opacity = 0;
    }
}

// Fonctions pour show une section grace à son index
function showSlide(index) {
    slider.children[index].style.zIndex = 1;
    slider.children[index].style.opacity = 1;
    resetLines();
    lineStyle(linesParent.children[index]);
}

// Fonctions for auto sliding
function autoSliding() {
    intervalId = setInterval(() => {
        resetOpacity();
        index = index < slider.children.length - 1 ? index + 1 : 0;
        showSlide(index);
    }, 5000);
}
autoSliding();

// Le hover effect
sliderContainer.addEventListener('mouseover', () => {
    clearInterval(intervalId);
});
sliderContainer.addEventListener('mouseout', () => {
    autoSliding();
});

// les arrows listeners
right.addEventListener('click', () => {
    resetOpacity();
    index = index < slider.children.length - 1 ? index + 1 : 0;
    showSlide(index);
});

left.addEventListener('click', () => {
    resetOpacity();
    index = index > 0 ? index - 1 : slider.children.length - 1;
    showSlide(index);
});

// Les lines listeners

function resetLines() {
    for (let k = 0; k < linesParent.children.length; k++) {
        const element = linesParent.children[k];
        element.classList.remove('activated');
    }
}

function lineStyle(element) {

    element.classList.add('activated');
}

for (let j = 0; j < linesParent.children.length; j++) {
    linesParent.children[j].addEventListener('click', (event) => {
        resetLines();
        resetOpacity();
        index = j;
        showSlide(index);
        lineStyle(event.srcElement);
    });
}
