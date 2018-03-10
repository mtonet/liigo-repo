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
    <div class="navbar-collapse collapse">
 <div class="main-menu-wrap">
        <div class="container-fixed">

        <div class="member-actions right">
          <a href="user-submit-property.html" class="button small alt button-icon"><i class="fa fa-search"></i>BUSCAR</a>
        </div>


        <div class="busca">
        <form action="" method="post" id="busca">
          
         <div class="col-md-2">
           <select class="form-control" name="estadobusc">
  <option value="">Estado</option>
  <!-- MOSTRAR os estado apenas que possui anúncio
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Rorâima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>-->
</select>
         </div>
         <div class="col-md-3">
           <select class="form-control" name="cidadebusc">
  <option>Cidade</option>
  <!-- MOSTRAR as cidades apenas que possui anúncio
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>-->
</select>

         </div>
         <div class="col-md-3">
           <select class="form-control" name="precisabusc">
  <option>O que você precisa?</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
         </div>
         <div class="col-md-2">
           <select class="form-control" name="servicosbusc">
  <option>Serviços</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
         </div>

        </form>
        </div>
      

        <div class="clear"></div>

      </div>

      </div><!-- end main menu wrap -->
    </div><!-- end navbar collaspe -->

  </div><!-- end container -->
</header>
