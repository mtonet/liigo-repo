<?php
//filtro
require"includes-acoes/filtro-pesquisa/filtro-pesquisa.php";
?>
<header class="header-default">

  <div class="container">

    <!-- navbar header -->
    <div class="navbar-header">

      <div class="header-details">
        <div class="header-item header-search left">
            <a id="lupa"></a>
          <table>
              <tr>
              <td><a class="lupa-mobile" href="#lupa"><i class="fa fa-search"></i></a>              
              </td>
              <td class="header-item-text">
                <form class="search-form" method="get" id="buscaprinc" name="buscaprinc" action="resultado-busca">
                  <input type="text" placeholder="Busca..." required name="buscaprinc" value="<?php echo $buscaprinc?>" />
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td>      
                <?php if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){?>
                <span><a href="meu-perfil" style="color: #000;">Meu perfil</a></span>
                <?php }else{?>
                <span><a href="cadastre-se" style="color: #000;">Cadastre-se</a></span>
                <?php }?>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td>
                <?php if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){?>
                <span><a href="meus-anuncios" style="color: #000;">Anúncios</a></span>                
                <?php }else{?>
                <span><a href="login" style="color: #000;">Login</a></span>
                <?php }?>
              </td>
            </tr>
          </table>
        </div>
          <div class="header-item header-phone left">
          <table>
            <tr>
              <td>
                <span><a href="anuncie" style="color: #44BB6F;">Anuncie</a></span>
              </td>
            </tr>
          </table>
        </div>
        <div class="clear"></div>
      </div>

      <a class="navbar-brand" href="index"><img src="images/logo.png" alt="logo liigo" /></a>

      <!-- nav toggle -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- main menu -->
    <form action="lista-de-anuncios" method="get" id="buscaselect" name="buscaselect">
    <div class="navbar-collapse collapse">
 <div class="main-menu-wrap">
        <div class="container-fixed">

        <div class="member-actions right">
          <a onclick="javascript:buscaselect.submit()" class="button small alt button-icon"><i class="fa fa-search"></i>BUSCAR</a>
        </div>


        <div class="busca">
        
          
         <div class="col-md-2">
           <select class="form-control require" name="estadobusc" id="estadobusc">
  <option value="">Estado</option>
<?php while($lineestados=$queryestados->fetch_array()){?>
    <option value="<?php echo $lineestados['estado'];?>" <?php if($estadobusc==$lineestados['estado']){?>selected<?php }?>><?php echo $lineestados['estado'];?></option>
<?php }?>
</select>
         </div>

         <div class="col-md-2">
          <?php if($cidadebusc==""){?>
           <select class="form-control" name="cidadebusc" id="cidadebusc">
  <option value="">Cidade</option>
  <?php if($cidadebusc!=""){?>
  <option value="<?php echo ucfirst($cidadebusc)?>" selected><?php echo ucfirst($cidadebusc)?></option>
  <?php }?>
</select>
<?php }else{?>
<select class="form-control" name="cidadebusc" id="cidadebusc">
<?php 
$listacidades="SELECT status,estado,cidade, COUNT(cidade) AS cidades from tbl_anuncio WHERE estado='".$estadobusc."' AND status='1' GROUP BY cidade ORDER BY cidade ASC";
$querycidades=$mysqli->query($listacidades);
while($linecidades=$querycidades->fetch_array()){
?>
<option value="<?php echo $linecidades['cidade']?>" <?php if($cidadebusc==$linecidades['cidade']){?>selected<?php }?>><?php echo $linecidades['cidade']?></option>
<?php }?>
</select>
<?php }?>
         </div>

         
         <div class="col-md-3">
           <select class="form-control" name="precisabusc" id="precisabusc">
  <option value="">O que você precisa?</option>
  <?php while($linecategoria=$querycategoria->fetch_array()){?>
    <option value="<?php echo $linecategoria['categoria'];?>" <?php if($precisabusc==$linecategoria['categoria']){?>selected<?php }?>><?php echo $linecategoria['categoria'];?></option>
<?php }?>
</select>
         </div>


         <div class="col-md-3">

<?php if($precisabusc==""){?>

 <select class="form-control" name="servicosbusc" id="servicosbusc">
 <option value=""></option>
 <?php if($servicosbusc!=""){?>
 <option value="<?php echo ucfirst($servicosbusc)?>" selected><?php echo ucfirst($servicosbusc)?></option>
 <?php }?>
</select>

<?php }elseif($precisabusc!=""){?>
<select class="form-control" name="servicosbusc" id="servicosbusc">
<?php 
//categoria 
$listasubh="SELECT status,categoria,subcategoria from tbl_anuncio WHERE categoria='".$precisabusc."' AND status='1' GROUP BY subcategoria ORDER BY subcategoria ASC";
$querysubh=$mysqli->query($listasubh);
$numsubh=$querysubh->num_rows;
if($numsubh==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linesubh=$querysubh->fetch_array()){
$mc=explode(",", $linesubh['subcategoria']);

foreach($mc as $separado => $valor){
?>
<option value="<?php echo $valor;?>" <?php if($valor==$servicosbusc){?>selected<?php }?>><?php echo $valor;?></option>
<?php
}
}
}
?>
</select>
<?php 
}
?>
         </div>

        </form>
        </div>
      

        <div class="clear"></div>

      </div>

      </div><!-- end main menu wrap -->
    </div><!-- end navbar collaspe -->

  </div><!-- end container -->
</header>
