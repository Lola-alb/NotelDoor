/*Appel des fonctions après chargement*/
console.log('ee')

window.addEventListener('DOMContentLoaded', () => {
    document.querySelector(".loading").classList.add("preloader-hidden");
    setTimeout(hidePreloader, 2000);
    preferredTheme();
    changeModeIcon();
    changeImages();
    changeBOImages();
})
window.addEventListener('load', () => {
    document.querySelector('.al-mode a').addEventListener('click', callThemeFunctions);
    document.querySelector('.al-mode a').addEventListener('click', preventScrolltoTop);
    document.getElementById('menu').addEventListener('click', callBurgerFunctions);
    document.getElementById('menu').addEventListener('click', preventScrolltoTop);
})


    
    function hidePreloader() {   
     preloaderFadeOutTime = 500;
      preloader = document.querySelector('.loading');

      preloader.style.display="flex";
      preloader.style.transition = 'opacity ' + preloaderFadeOutTime + 'ms';
      preloader.style.opacity = '0';
      setTimeout(function() {
        preloader.style.display = 'none';
      }, preloaderFadeOutTime);
    }
    
 

/*Rassemblement des fonctions devant se lancer au clic sur l'icône du thème + le menu burger*/
function callThemeFunctions(){
    switchTheme();
    changeImages();
    changeModeIcon();
    changeBOImages();
}

function callBurgerFunctions(){
    displayMenu();
    menuTransition();
}

/*Menu burger pour le mobile*/
function displayMenu(){
    items = document.querySelectorAll(".menu-item") 
    for(i=items.length - 1;i >= 0; i--){
        items[i].classList.toggle("visible") 
    }
    burger = document.getElementById('menu')
    burger.classList.toggle('menu-open');  
}

/*Transition à l'ouverture du menu burger en mobile (apparaît par la droite) */
function menuTransition(){
    burger = document.getElementById('menu')
    list = document.querySelector('nav ul')
    if(burger.classList.contains('menu-open')){
        list.style.width = "100%";
        list.style.left = "0";
    }
    else{
        list.style.width = "0";
        list.style.left = "100%";
    }
}

/*Mode sombre ou clair selon l'heure de la journée = comportement par défaut*/
function activeMode() {
    date = new Date();
    hour = date.getHours();
 
   if (hour >= 19 || hour < 7) {
     document.body.classList.add("dark-mode");
   } else {
     document.body.classList.remove("dark-mode");
   }
 }

/*Mode sombre ou clair choisi par l'utilisateur depuis le bouton thème de la navbar*/
function switchTheme(){
    modeBtn = document.querySelector('.al-mode a');
    document.body.classList.toggle("dark-mode");
    document.body.classList.contains("dark-mode") ? sessionStorage.setItem('mode', 'dark') : sessionStorage.setItem('mode', 'light');

}

/*Empêche le scroll automatique au clic sur l'icône */
function preventScrolltoTop(event) {
    event.preventDefault();
  };
  

/*Vérifie l'existence d'une préférence de l'utilisateur pour le thème = si l'utilisateur n'a pas changé
le thème lui-même, il sera choisi selon l'heure de la journée*/
function preferredTheme(){
    if(sessionStorage.getItem('mode')  == 'dark'){
        document.body.classList.add("dark-mode"); 
    }else if(sessionStorage.getItem('mode')  == 'light'){
        document.body.classList.remove("dark-mode");
    }
    else{
        activeMode()
    }
}

/*Changer les images selon le thème : uniquement pour les images dans des balises img.al-image, mises en dur dans les fichiers templates - par exemple, le logo)*/
function changeImages(){
    images = document.querySelectorAll('.al-image');
    for(i = 0; i < images.length; i++){
        if(document.body.classList.contains("dark-mode")){
           source = images[i].getAttribute("src");
           source = source.replace("light", "dark");
           images[i].setAttribute("src", source);
        }else{
            source = images[i].getAttribute("src");
            source = source.replace("dark", "light");
            images[i].setAttribute("src", source);
        }
    }
}

/*Changer les images selon le thème : pour les images mises depuis le back office de Wordpress - par exemple, les portraits*/
function changeBOImages(){
    lightImages = document.querySelectorAll('.al-image-light');
    darkImages = document.querySelectorAll('.al-image-dark');
    if(document.body.classList.contains("dark-mode")){
        for(i = 0; i < darkImages.length; i++){
            lightImages[i].style.display = "none"
            darkImages[i].style.display = "block"
        }
    }else{
        for(i = 0; i < lightImages.length; i++){
            darkImages[i].style.display= "none"
            lightImages[i].style.display = "block"
        }
    }
}

/*Changement de l'apparence de l'icône thème dans la navbar selon le thème*/
function changeModeIcon(){
    icon = document.querySelector('.al-mode a');
    if(document.body.classList.contains("dark-mode")){
        icon.innerHTML = '<i class="fa-solid fa-lightbulb"></i>';
        icon.style.color = "white";

    }else{
        icon.innerHTML = '<i class="fa-solid fa-moon"></i>';
        icon.style.color = "#2B2C49";
    }
}

/*Animation au chargement d'une page*/

  
  