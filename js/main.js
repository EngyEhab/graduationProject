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
    console.log();
})
// end using enter button to submit search form
$('.member').click(function(e){
    console.log(e.target);
})

