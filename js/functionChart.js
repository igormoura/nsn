// FUNÇÃO GERAR GRID RELÁTORIO GRÁFICOS
function gerarRelatorio(chave, dados)
{
    var table_html = '<table class="table table-striped table-bordered"><thead><tr>';
    for (var prop in dados[chave][0]){
      table_html += '<th>' + prop + '</th>' ;
    } 
    table_html += '</tr></thead><tbody>';        
    for(var i=0; i < dados[chave].length; i++){
        table_html += '<tr>';
        for (var prop in dados[chave][0]){
            table_html += '<td>' + dados[chave][i][prop] + '</td>' ;
          }             
        table_html += '</tr>';
   }
   table_html += '<tr><td><b>Total</b></td><td><b>'+ dados[chave].length +'</b></td><td></td><td></td></tr>'
   table_html +=  '</tbody></table>';
   $("#modal-body").html(table_html);
   $("#modal-header").html('<h4>Relatório: '+ chave +'</h4>');
} 

// RELATÓRIO GRÁFICOS POR CANCELAMENTO
function gerarRelatorioCanc(chave)
{ 
    $("#modal-header").html('<h4>Relatório: '+ chave +'</h4>');
    $( ".relatorio" ).addClass("hide");    
    chave = chave.replace(/\ /g, '');
    var div = '#'+chave;
    if ($(div).length){$(div).removeClass("hide")}
}

