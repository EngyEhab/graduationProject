// start navbar
    $('.nav-link').click(function(e){
        var clickedItem = e.target;
        $(clickedItem).parent().addClass('clickedLinkStyle');
        $(clickedItem).parent().siblings().removeClass('clickedLinkStyle');
    })
//end navbar

// start select image in add member page
$('#imageSelectionField').change(function(e){
    var selectedImage = e.target.files[0].name;
    $('#profile').attr('src','../images/'+selectedImage);
})
// end select image in add member page

// start open and close sidebar
$('#openBtn').click(function(){
    $('#openBtn').addClass('d-none');
    $('#closeBtn').removeClass('d-none');
    $('#sidebar').animate({right:'0'},1000);
})

$('#closeBtn').click(function(){
    $('#closeBtn').addClass('d-none');
    $('#openBtn').removeClass('d-none');
    $('#sidebar').animate({right:'-100%'},1000);
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

$('#vacationFile').change(function(e){
    var selectedSecondmentFile = e.target.files[0].name;
    $('.selectedSecondmentFile').text(selectedSecondmentFile);
})


// end when click on div choose file , click on input choose file

$('.tableCompleteDataBtn').click(function(){
    $('#completeDataContainer').removeClass('d-none');
    $('.fixedFooter').removeClass('position-fixed');
    console.log($('#completeDataContainer'))
})

$('#memberSelection').change(function(){
    $('#memberSelectionForm').submit();
})

