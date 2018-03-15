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
//combo cidade cadastro
$("select[name=estado]").change(function(){
$("select[name=cidade]").html('<option value="0">carregando...</option>');
$.post("includes-acoes/cadastro/cidades.php",
{estado:$(this).val()},
function(valor){
$("select[name=cidade]").html(valor);
}
)
})
//combo cidade filtro
$("select[name=estadof]").change(function(){
$("select[name=cidadef]").html('<option value="0">carregando...</option>');
$.post("includes-acoes/listas/cidades.php",
{estadof:$(this).val()},
function(valor){
$("select[name=cidadef]").html(valor);
}
)
})

})
