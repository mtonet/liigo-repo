$(document).ready(function(){				   
/////////////////////////////////cidade//////////////////////////////////////////////////////////
//combo box 2 cidades
$("select[name=estadobusc]").change(function(){
$("select[name=cidadebusc]").html('<option value="0">carregando...</option>');
$.post("../../../includes-acoes/filtro-pesquisa/cidades.php",
{estadobusc:$(this).val()},
function(valor){
$("select[name=cidadebusc]").html(valor);
}
)
})
})