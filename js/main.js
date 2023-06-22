if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
// start navbar
$(document).ready(function () {
    var links = $('.nav-link');
    var relativePath = location.pathname.split("/")[3];
    for (var i = 0; i < links.length; i++) {
        if (links[i].pathname.split('/')[3] == relativePath) {
            $('a[href^="' + relativePath + '"]').parent().addClass('clickedLinkStyle')
        }
    }
});
//end navbar

// start select image in add member page
$('#imageSelectionField').change(function (e) {
    var selectedImage = URL.createObjectURL(e.target.files[0]);
    $('#profile').attr('src', selectedImage);
})
// end select image in add member page

// start open and close sidebar
$('#openBtn').click(function () {
    $('#openBtn').addClass('d-none');
    $('#closeBtn').removeClass('d-none');
    $('.sidebarContainer').animate({ right: '-80%' }, 1000);
})

$('#closeBtn').click(function () {
    $('#closeBtn').addClass('d-none');
    $('#openBtn').removeClass('d-none');
    $('.sidebarContainer').animate({ right: '-100%' }, 1000);
})
//end open and close sidebar


// start button to up
$(window).scroll(function () {
    var windowScroll = $(window).scrollTop();
    if (windowScroll > 300) {
        $('#btnUp').fadeIn(500);
    }
    else {
        $('#btnUp').fadeOut(500);
    }
})


$('#btnUp').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 100);
})

// end button to up


// start using enter button to submit search form

$('.searchField').on('keypress', function (e) {
    if (e.keyCode == 13) {
        $('#searchForm').submit();
    }
})

$('.searchBtn').click(function () {
    $('#searchForm').submit();
})



// end using enter button to submit search form

// start transform input type to date when focus on it


$('#birthDate').on('focusin', function (e) {
    e.target.type = 'date';
});

$('#birthDate').on('focusout', function (e) {
    e.target.type = 'text';
});

$('#hiringDate').on('focusin', function (e) {
    e.target.type = 'date';
});

$('#hiringDate').on('focusout', function (e) {
    e.target.type = 'text';
});

$('#startDate').on('focusin', function (e) {
    e.target.type = 'date';
});

$('#startDate').on('focusout', function (e) {
    e.target.type = 'text';
});

$('#endDate').on('focusin', function (e) {
    e.target.type = 'date';
});

$('#endDate').on('focusout', function (e) {
    e.target.type = 'text';
});

// end transform input type to date when focus on it

// start when click on div choose file , click on input choose file
$('.choosePenaltyFileBtn').click(function (e) {
    $('#penaltyFile').click();

});

$('#penaltyFile').change(function (e) {
    var selectedPenaltyFile = e.target.files[0].name;
    $('.selectedPenaltyFile').text(selectedPenaltyFile);
})

$('.chooseVacationFileBtn').click(function (e) {
    $('#vacationFile').click();
});

$('#vacationFile').change(function (e) {
    var selectedVacationFile = e.target.files[0].name;
    $('.selectedVacationFile').text(selectedVacationFile);
})

$('.chooseSecondmentFileBtn').click(function (e) {
    $('#secondmentFile').click();
});

$('#secondmentFile').change(function (e) {
    var selectedSecondmentFile = e.target.files[0].name;
    $('.selectedSecondmentFile').text(selectedSecondmentFile);
})


// end when click on div choose file , click on input choose file


// start completeData page
$('.tableCompleteDataBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    var doctorJobID = $(this).attr('doctorJobID');
    var doctorJobName = $(this).attr('doctorJobName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
    $('#doctorJobInput').val(doctorJobID);
    $('#doctorJobNameInput').val(doctorJobName);
})

// end completeData page

$('#completeBtn').click(function(){
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    var doctorJobID = $(this).attr('doctorJobID');
    var doctorJobName = $(this).attr('doctorJobName');
    console.log(doctorJobName);
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
    $('#doctorJobInput').val(doctorJobID);
    $('#doctorJobNameInput').val(doctorJobName);
})
// start statement page
$('.tableDisplayBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    $('#doctorCodeInput').val(doctorCode);

})
// end statement page


// start addPenalty page
$('.tableAddPenaltyBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addPenalty page

// start addSecondment page
$('.tableAddSecondmentBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addSecondment page

// start addVacation page
$('.tableAddVacationBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);

})

$('.tableAddPrivateVacationBtn').click(function () {
    var doctorCodePrivate = $(this).attr('doctorCodePrivate');
    var doctorNamePrivate = $(this).attr('doctorNamePrivate');
    $('#doctorCodeInputPrivate').val(doctorCodePrivate);
    $('#doctorNameInputPrivate').val(doctorNamePrivate);


})
// end addVacation page

// start addMission page
$('.tableAddMissionBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addMission page

// start addAssignment page
$('.tableAddAssignmentBtn').click(function () {
    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
})
// end addAssignment page

// start UpdateJobGrade page
var doctorJobs = [{ jodId: 5, jobName: "معيد", jobOrder: 1 },
{ jodId: 4, jobName: "مدرس مساعد", jobOrder: 2 },
{ jodId: 3, jobName: "مدرس", jobOrder: 3 },
{ jodId: 8, jobName: "مدرس متفرغ", jobOrder: 4 },
{ jodId: 2, jobName: "استاذ مساعد", jobOrder: 5 },
{ jodId: 7, jobName: "استاذ مساعد متفرغ", jobOrder: 6 },
{ jodId: 1, jobName: "استاذ", jobOrder: 7 },
{ jodId: 6, jobName: "استاذ متفرغ", jobOrder: 8 }]

$('.tableUpdateJobGradeBtn').click(function () {

    var doctorCode = $(this).attr('doctorCode');
    var doctorName = $(this).attr('doctorName');
    var doctorJob = $(this).attr('doctorJob');
    var doctorJobName = $(this).attr('doctorJobName');
    var jobOrder = $(this).attr('job_order');

    var newDoctorJobs = [...doctorJobs];
    var upcomingDoctorJobs = newDoctorJobs.slice(jobOrder);
    newDoctorJobs = upcomingDoctorJobs;
    var select = document.getElementById("job");
    $('#job').empty();
    var options = newDoctorJobs;
    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt.jobName;
        el.value = opt.jodId;
        select.appendChild(el);
    }

    $('#doctorCodeInput').val(doctorCode);
    $('#doctorNameInput').val(doctorName);
    $('#doctorJobInput').val(doctorJob);
    $('#doctorJobNameInput').val(doctorJobName);
})



// end UpdateJobGrade page

$('.chooseFacultyLogoBtn').click(function (e) {
    $('#facultyLogo').click();
});

$('#facultyLogo').change(function (e) {
    var selectedVacationFile = e.target.files[0].name;
    $('.selectedFacultyLogo').text(selectedVacationFile);
});

$('.chooseProgramLogoBtn').click(function (e) {
    $('#programLogo').click();
});

$('#programLogo').change(function (e) {
    var selectedVacationFile = e.target.files[0].name;
    $('.selectedProgramLogo').text(selectedVacationFile);
});

// start validation of password addUser page
$('.addUserBtn').click(function (e) {
    var userPass = $('.password').val();
    var userConfirmPass = $('.confirmPassword').val();
    if (userPass !== userConfirmPass) {
        $('.confirmPassword').after('<p class="mainTitle mb-0 me-2">كلمة المرور غير مطابقة</p>')
        e.preventDefault();
    }
})

// end validation of password addUser page




