const carou = document.querySelectorAll('img');
const nbSlide = carou.length;
const suivant = document.querySelector('.btnRight');
const precedent = document.querySelector('.btnLeft');
let count = 0 ;

function slideSuivante() {
    carou[count].classList.remove('active');

    if(count < nbSlide - 1) {
        count++;
    }
    else {
        count = 1;
    }

    carou[count].classList.add('active');
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente() {
    carou[count].classList.remove('active');

    if(count > 0) {
        count--;
    }
    else {
        count = nbSlide - 1;
    }

    carou[count].classList.add('active');

}
precedent.addEventListener('click', slidePrecedente)
