$(document).ready(function(){				   
//combo cidades
$("select[name=estadobusc]").change(function(){
$("select[name=cidadebusc]").html('<option value="0">carregando...</option>');
$.post("includes-acoes/filtro-pesquisa/cidades.php",
{estadobusc:$(this).val()},
function(valor){
$("select[name=cidadebusc]").html(valor);
}
)
})
//combo categoria
$("select[name=precisabusc]").change(function(){
$("select[name=servicosbusc]").html('<option value="0">carregando...</option>');
$.post("includes-acoes/filtro-pesquisa/subcategoria.php",
{precisabusc:$(this).val()},
function(valor){
$("select[name=servicosbusc]").html(valor);
}
)
})


})
