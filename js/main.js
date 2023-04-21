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

// start add and display image in add member page
var imageSelectionField = document.getElementById('imageSelectionField');
var profileContainer = document.getElementById('profile');

imageSelectionField.addEventListener('change', function(e){
    profileContainer.setAttribute('src' , '../images/'+e.target.files[0].name);
})

// end add image button in add member page

// start create object of member from values of inputs and clear form
var addBtn = document.getElementById('addBtn');
addBtn.addEventListener('click',function(){
    addMember();
})

var arabicNameInput = document.getElementById('arabicName');
var englishNameInput = document.getElementById('englishName');
var nationalIDInput = document.getElementById('nationalID');
var personalEmailInput = document.getElementById('personalEmail');
var academicEmailInput = document.getElementById('academicEmail');
var phoneNumberInput = document.getElementById('phoneNumber');
var universityInput = document.getElementById('university');
var facultyInput = document.getElementById('faculty');
var departmentInput = document.getElementById('department');
var jobInput = document.getElementById('job');
var notesInput = document.getElementById('notes');
var profilePicture = document.getElementById('imageSelectionField');

var members = [];


function addMember()
{
    var member ={
        arabicName:arabicNameInput.value,
        englishName:englishNameInput.value,
        nationalID:nationalIDInput.value,
        personalEmail:personalEmailInput.value,
        academicEmail:academicEmailInput.value,
        phoneNumber:phoneNumberInput.value,
        university:universityInput.value,
        faculty:facultyInput.value,
        department:departmentInput.value,
        job:jobInput.value,
        notes:notesInput.value,
        profilePicture:profilePicture.value,
    }
    members.push(member);
    console.log(members);
    clearForm();
}

function clearForm()
{
    arabicNameInput.value = "";
    englishNameInput.value = "";
    nationalIDInput.value = "";
    personalEmailInput.value = "";
    academicEmailInput.value = "";
    phoneNumberInput.value = "";
    universityInput.value = "helwan";
    facultyInput.value = "commerce";
    departmentInput.value = "";
    jobInput.value = "";
    notesInput.value = "";
    profilePicture.value = "";
    profileContainer.setAttribute('src','');
}
// end create object of member from values of inputs and clear form
