$('form.delete-object').submit(function(e){

    var deleteConfirmed = confirm('Are you sure you want to delete this?!');

    return deleteConfirmed;
});


$('.edit-object').click(function(e) {
  var $commentItem = $(this).closest('li');
  var $commentForm = $commentItem.find('form.edit-object-form');
   $commentForm.toggleClass('d-none');
});