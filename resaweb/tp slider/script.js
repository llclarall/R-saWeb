
 var position = -500;
const sliderWidth = document.querySelector('.js-slider').offsetWidth;
const photosContainer = document.querySelector('.js-photos');
const photos = document.querySelectorAll('.js-photo');
var currentIndex = 1;

function decale(direction) {
    if (direction === 'gauche') {
        if (currentIndex === 3) {
            currentIndex = 0;
            position = 0;
            photosContainer.style.transition = 'none';
            photosContainer.style.left = `${position}px`;
            currentIndex ++;
        } else {
            currentIndex++;
        }
    } else if (direction === 'droite') {
        if (currentIndex === 1) {
            currentIndex = 4;
            position = -sliderWidth * currentIndex;
            photosContainer.style.transition = 'none';
            photosContainer.style.left = `${position}px`;
            currentIndex--;
        } else {
            currentIndex--;
        }    
    }
setTimeout(() => {
    position = -sliderWidth * currentIndex;
    photosContainer.style.transition = 'left 0.3s ease';
    photosContainer.style.left = `${position}px`;
}, 20) }
   

/* setInterval(() => decale('gauche'), 3000);
 */
const decalGaucheBtn = document.getElementById('decalGaucheBtn');
decalGaucheBtn.addEventListener('click', () => decale('gauche'));

const decalDroiteBtn = document.getElementById('decalDroiteBtn');
decalDroiteBtn.addEventListener('click', () => decale('droite'));
 