// start navbar
var navLinks = document.querySelectorAll('.nav-item');
navLinks.forEach(navLink => {
    navLink.addEventListener('click' , function(){
        navLinks.forEach(nav =>{
            nav.classList.remove('clickedLinkStyle');
        })
        navLink.classList.add('clickedLinkStyle');
    })
});
//end navbar