/*Header*/
const searchActivation = () => {
    search_icon = document.querySelector('.search-icon');
    side_setting = document.querySelector('.side-setting');
    logo = document.querySelector('.logo');
    search_box = document.querySelector('.search-box');
    x_icon = document.querySelector('.x-icon');

    search_icon.addEventListener('click', () => {
        side_setting.classList.toggle('side-setting-deactivated');
        logo.classList.toggle('logo-deactivated');
        search_box.classList.toggle('search-box-active');
    });
    x_icon.addEventListener('click', () => {
        side_setting.classList.toggle('side-setting-deactivated');
        logo.classList.toggle('logo-deactivated');
        search_box.classList.toggle('search-box-active');
    })
};

searchActivation();


// Ctaegories mouse out over
// const category = document.querySelector('.select-cat');
// category.addEventListener('mouseout', (event) => {
//     event.srcElement.style.borderRadius = "30px 0 0 30px";
// });

// category.addEventListener('mouseover', (event) => {
//     event.srcElement.style.borderRadius = "30px 0 0 0";
// });
