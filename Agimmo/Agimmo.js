let imageContainer = document.querySelector('.images');
let images = imageContainer.querySelectorAll('img');
let currentImage = 0;
let intervalId;
let pause = 5; //délai de pause en secondes

//fonction pour défiler les images
function scrollImages() {
    currentImage++;
    if (currentImage >= images.length) {
        currentImage = 0;
    }
    imageContainer.style.left = -currentImage * 300 + 'px';
}

//fonction pour démarrer le défilement des images
function startScrolling() {
    intervalId = setInterval(scrollImages, 3000);
}

//fonction pour arrêter le défilement des images
function stopScrolling() {
    clearInterval(intervalId);
}

startScrolling();
//appel de la fonction pour relancer l'animation après le délai de pause
setTimeout(startScrolling, pause * 1000);