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