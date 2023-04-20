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

// start add image button in add member page
var imageBtn = document.getElementById('imageBtn');
imageBtn.addEventListener('click',function(){
    document.getElementById('imageSelectionField').click();
})
// end add image button in add member page