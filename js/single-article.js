/*Appel des fonctions après chargement*/
window.addEventListener('DOMContentLoaded', () => {
    hideArrow();
})

/*Cacher les flèches dans la navigation entre les articles lorsqu'il n'y a pas d'article précédent ou suivant*/
function hideArrow(){
    prev = document.querySelector('.al-single-navigation-prev');
    next = document.querySelector('.al-single-navigation-next');
    prev.children.length == 0 ? prev.classList.remove('showArrow'): prev.classList.add('showArrow');
    next.children.length == 0 ? next.classList.remove('showArrow'): next.classList.add('showArrow');
}
