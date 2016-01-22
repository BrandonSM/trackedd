$(document).ready(function(){

  $('#form-new').submit(function(event) {

      // prevent form from being "submitted"
      event.preventDefault();


      var form = $(this);
      var task = $('#task').val();

      console.log(task);
  });

});
