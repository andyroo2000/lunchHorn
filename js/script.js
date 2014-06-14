jQuery(document).ready(function($) {
  // MAKE THE POST REQUEST TO play_sound.php WHEN A PLAY BUTTON IS CLICKED
  var id;
  var idParent;
  var data = {};
  var url = 'play_sound.php';   // the URL of that the AJAX will POST to

  $('.play').click(function(){
    // GET DATA ABOUT THE CLICKED TRACK TO SEND IN A POST REQUEST
    id = this.id;  // save the id of the clicked item
    idParent = $(this).parent().attr("id"); // save the id of the containing div
    data = {id: id, idParent: idParent}; // create an object to send in our post request

    // MAKE A POST REQUEST WHEN THE BUTTON IS CLICKED TO PLAY THE SOUND
    $.ajax({
        url: url,
        type: "POST",
        data: JSON.stringify(data),
        contentType: "application/json",
        complete: logSuccessCallback
    });

    // ADD 'selectedtrack' CLASS WHEN TRACK IS CLICKED AND REMOVE CLASS FROM OTHER TRACKS
    $(this).toggleClass('selectedTrack').siblings().removeClass('selectedTrack');

    // ADD PLAY FONT-AWESOME PLAY BUTTON CLASS WHEN TRACK IS CLICKED AND REMOVE FROM OTHER TRACKS
    $(this).children().toggleClass('fa fa-play-circle-o');
    $(this).siblings().children().removeClass('fa fa-play-circle-o');
  })

  function logSuccessCallback() {
    // console.log('Success!');
  }


  // SHOW TRACKS (AUDIO FILES) FOR EACH CATEGORY WHEN A CATEGORY IS SELECTED
  $('.sounds').click(function() {
    if ($('.sounds').children('div').hasClass('not-hidden') ) {
      $('.play').removeClass('not-hidden');
      $('.play').addClass('hidden');
    }

    if ($('.sounds').children('.play').hasClass('hidden') ) {
      $('.play', this).removeClass( "hidden" );
      $('.play', this).addClass( "not-hidden" );
    }

  })
});




