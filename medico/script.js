$("#cancelar").click(function(){
    $("#local").val("") 
    $('#solicita_exame option').each(function() {
          $(this).prop('selected', false);
      });
      $('.filter-option-inner-inner').text("Nothing selected")
})

