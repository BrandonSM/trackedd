$(document).ready(function(){

  // On clicking
  $('#form-new').submit(function(event) {

      // prevent form from being "submitted"
      event.preventDefault();


      var form = $(this);
      var task = $('#task').val();
      var data = form.serialize();


      console.log(task);

      $.ajax({
        url: 'log.php',
        data: data
      });
  });

});
