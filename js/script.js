jQuery(document).ready(function($) {
  var id;
  var data = {};
  var url = 'play_sound.php';   // the URL of that the AJAX will POST to

  $('.button').click(function(){
    id = this.id;
    data = {id: id};
    console.log(data);

    // MAKE A POST REQUEST WHEN THE BUTTON IS CLICKED TO PLAY THE SOUND
    $.ajax({
        url: url,
        type: "POST",
        data: JSON.stringify(data),
        contentType: "application/json",
        complete: logSuccessCallback
    });
  })

  function logSuccessCallback() {
    console.log('Success!');
  }
});




