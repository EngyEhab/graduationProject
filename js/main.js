if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
// start navbar
    $(document).ready(function() {
        var links = $('.nav-link');
        var relativePath = location.pathname.split("/")[3];
        for(var i = 0; i<links.length;i++)
        {
            if(links[i].pathname.split('/')[3] == relativePath)
            {
                $('a[href^="'+relativePath+'"]').parent().addClass('clickedLinkStyle')
            }
        }
    });
//end navbar

// start select image in add member page
$('#imageSelectionField').change(function(e){
    var selectedImage = URL.createObjectURL(e.target.files[0]);
    $('#profile').attr('src',selectedImage);
})
// end select image in add member page

// start open and close sidebar
$('#openBtn').click(function(){
    $('#openBtn').addClass('d-none');
    $('#closeBtn').removeClass('d-none');
    $('.sidebarContainer').animate({right:'-80%'},1000);
})

$('#closeBtn').click(function(){
    $('#closeBtn').addClass('d-none');
    $('#openBtn').removeClass('d-none');
    $('.sidebarContainer').animate({right:'-100%'},1000);
})
//end open and close sidebar


// start button to up
$(window).scroll(function(){
    var windowScroll = $(window).scrollTop();
    if(windowScroll > 300)
    {
        $('#btnUp').fadeIn(500);
    }
    else
    {
        $('#btnUp').fadeOut(500);
    }
})


$('#btnUp').click(function(){
    $('html, body').animate({scrollTop: 0}, 100);
})

// end button to up


// start using enter button to submit search form

$('.searchField').on('keypress',function(e){
    if(e.keyCode == 13)
    {
        $('#searchForm').submit();
    }
})

$('.searchBtn').click(function(){
    $('#searchForm').submit();
})



// end using enter button to submit search form

// start transform input type to date when focus on it


$('#birthDate').on('focusin',function (e) { 
    e.target.type = 'date';   
});

$('#birthDate').on('focusout',function (e) { 
    e.target.type = 'text';   
});

$('#hiringDate').on('focusin',function (e) { 
    e.target.type = 'date';   
});

$('#hiringDate').on('focusout',function (e) { 
    e.target.type = 'text';   
});

$('#startDate').on('focusin',function (e) { 
    e.target.type = 'date';   
});

$('#startDate').on('focusout',function (e) { 
    e.target.type = 'text';   
});

$('#endDate').on('focusin',function (e) { 
    e.target.type = 'date';   
});

$('#endDate').on('focusout',function (e) { 
    e.target.type = 'text';   
});

// end transform input type to date when focus on it

// start when click on div choose file , click on input choose file
$('.choosePenaltyFileBtn').click(function(e){
    $('#penaltyFile').click();

});

$('#penaltyFile').change(function(e){
    var selectedPenaltyFile = e.target.files[0].name;
    $('.selectedPenaltyFile').text(selectedPenaltyFile);
})

$('.chooseVacationFileBtn').click(function(e){
    $('#vacationFile').click();
});

$('#vacationFile').change(function(e){
    var selectedVacationFile = e.target.files[0].name;
    $('.selectedVacationFile').text(selectedVacationFile);
})

$('.chooseSecondmentFileBtn').click(function(e){
    $('#secondmentFile').click();
});

$('#secondmentFile').change(function(e){
    var selectedSecondmentFile = e.target.files[0].name;
    $('.selectedSecondmentFile').text(selectedSecondmentFile);
})


// end when click on div choose file , click on input choose file


// start completeData page
$('.tableCompleteDataBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    var doctorJob = $(this).attr('doctorJob');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
    $('#doctorJobInput').val(doctorJob);
})

// end completeData page

// start statement page
$('.tableDisplayBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    $('#doctorCodeInput').val(doctorCode);

})
// end statement page


// start addPenalty page
$('.tableAddPenaltyBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addPenalty page

// start addSecondment page
$('.tableAddSecondmentBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addSecondment page

// start addVacation page
$('.tableAddVacationBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);

})
// end addVacation page

// start UpdateJobGrade page
$('.tableUpdateJobGradeBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    var doctorJob = $(this).attr('doctorJob');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
    $('#doctorJobInput').val(doctorJob);
})

// end UpdateJobGrade page


