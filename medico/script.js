$("#cancelar").click(function(){
    $("#local").val("") 
    $('#solicita_exame option').each(function() {
          $(this).prop('selected', false);
      });
      $('.filter-option-inner-inner').text("Nothing selected")
})

$("#cancelarReceita").click(function(){
    $('#receitas').empty();
})

let i = 0;

function RemoverRemedio(val){
        $(val).remove();

}

function addConteudo() {
      document.getElementById(
        "receitas"
      ).innerHTML += `<div id="receita`+i+`" class="border p-2 m-2 rounded">
      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <label for="remedio`+i+`" class="input-group-text">Remédio</label>
          </div>
          <input type="text" id="remedio`+i+`" class="form-control">
      </div>

      <div class="input-group mb-3">
          <div class="input-group-prepend">
              <label for="duracao`+i+`" class="input-group-text">Duração</label>
          </div>
          <input type="text" id="duracao`+i+`" class="form-control">

          <div class="input-group-prepend">
              <label for="intervalo`+i+`" class="input-group-text">Intervalo</label>
          </div>
          <input type="text" id="intervalo`+i+`" class="form-control">
      </div>

      <div class="input-group">
          <div class="input-group-prepend">
              <label for="dosagem`+i+`" class="input-group-text">Dosagem</label>
          </div>
          <input type="text" id="dosagem`+i+`" class="form-control">

          <div class="input-group-prepend">
              <label for="unidade`+i+`" class="input-group-text">Unidade</label>
          </div>
          <input type="text" id="unidade`+i+`" class="form-control">
      </div>
      <button type="button" onclick="RemoverRemedio(receita`+i+`)" class="btn btn-danger mt-2 btn-sm">Remover</button>
  </div>`;
    i++;
  }