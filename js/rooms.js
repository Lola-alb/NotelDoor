/*Appel des fonctions après chargement*/
window.addEventListener('DOMContentLoaded', () => {
    iconSearch();
})

/*Searchbar icone */
function iconSearch(){
    iconS=document.querySelector('.wp-block-search__button')
    return iconS.innerHTML = "<i class='fa-solid fa-magnifying-glass'></i>"
}