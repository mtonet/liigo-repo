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
          <table>
              <tr>
              <td><i class="fa fa-search"></i></td>
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
              <td class="header-item-text">                
                <span><a href="cadastre-se" style="color: #000;">Cadastre-se</a></span>
              </td>
            </tr>
          </table>
        </div>
        <div class="header-item header-phone left">
          <table>
            <tr>
              <td class="header-item-text">
                <span><a href="login" style="color: #000;">Login</a></span>
              </td>
            </tr>
          </table>
        </div>
          <div class="header-item header-phone left">
          <table>
            <tr>
              <td class="header-item-text">
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
           <select class="form-control" name="cidadebusc" id="cidadebusc">
  <option value="">Cidade</option>
  <?php if($cidadebusc!=""){?>
  <option value="<?php echo ucfirst($cidadebusc)?>" selected><?php echo ucfirst($cidadebusc)?></option>
  <?php }?>
</select>

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
<option value=""></option>
<?php 
//categoria 
$listasubh="SELECT * from tbl_subcategoria WHERE categoria='".$precisabusc."' AND status='1' ORDER BY nome ASC";
$querysubh=$mysqli->query($listasubh);
$numsubh=$querysubh->num_rows;
if($numsubh==0){
echo"<option value=''>nenhum resultado ...</option>";
}else{
while($linesubh=$querysubh->fetch_array()){
?>
<option value="<?php echo $linesubh['nome'];?>" <?php if($linesubh['nome']==$servicosbusc){?>selected<?php }?>><?php echo $linesubh['nome'];?></option>
<?php
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
