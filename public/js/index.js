// Index page image slider
const heroImg = document.querySelector('#hero img')

let imgCount = 1;

setInterval(() => {
    if (imgCount === 3){
        imgCount = 1;
    } else {
        imgCount++;
    }
    heroImg.setAttribute('src', `./public/img/slider${imgCount}.jpg`)
}, 3000);