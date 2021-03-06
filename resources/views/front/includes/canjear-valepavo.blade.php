<div class="canjear-container">
  <header class="header-pavo" role="banner">
    <nav id="navbar-primary" class="navbar" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse" id="menu-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar-one"></span>
            <span class="icon-bar bar-two"></span>
            <span class="icon-bar bar-three"></span>
            <div class="menu-label">MENÚ</div>
          </button>
          <div class="logo-main min hidden-lg hidden-md hidden-sm">
            <!-- <a href='#' class='logo'><img src="images/logo.png" ></a> -->
            <a href="{!!url('/')!!}" class='logo-min'><img src="images/small-logo.png" alt="logo san fernando"></a>
          </div>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="nav-links"><a href="#canjear" data-ancla="canjear">Canjea</a></li>
            <li class="nav-links"><a href="#cotizar" data-ancla="cotizar">Cotiza</a></li>
            <li class="hidden-xs">
              <div class="logo-main min">
                <a href="{!!url('/')!!}" class='logo'><img id="logo-navbar-middle" src="images/logo.png" alt="Logo Thing main logo"></a>
                <a href="{!!url('/')!!}" class='logo-min'><img id="logo-navbar-middle" src="images/small-logo.png" alt="Logo Thing main logo"></a>
              </div>
            </li>
            <li class="nav-links"><a href="#beneficios" data-ancla="beneficios">Beneficios</a></li>
            <li class="nav-links"><a href="#recetas" data-ancla="recetas">Receta</a></li>
            <div class="col-lg-12 col-sm-12 col-xs-12 col-btn-contacto hidden-lg hidden-md hidden-sm">
              <div class="btn-footer btn-contact-header">
                <a class="btn-contacto"><i class="fa fa-envelope" aria-hidden="true"></i><span>Contáctenos</span></a>
              </div>
              <div class="btn-footer">
                <a href="https://www.facebook.com/san.fernando.labuenafamilia" target="_blank" class="btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span>Síguenos</span></a>
              </div>
            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header><!-- header role="banner" -->
  <div class="white-background">
    <div class="canejar-content">
      <h2>¿Dónde puedo canjear mi Pavo?</h2>
      <p class="lugares-txt hidden-xs">Conoce los lugares de canje</p>
      <p class="hidden-lg hidden-md hidden-sm txt-info-local">Información del local seleccionado</p>
      <div class="row row-nomargin">
        <div class="table-distribuidores">
          <div class="col-md-12 col-xs-12 col-nopadding">
            <div class="col-md-12 col-xs-12 col-nopadding">
              <div id="exTab1" class="container  col-md-12 col-xs-12 col-nopadding">
                <div class="row row-nav hidden">
                  <ul class="nav nav-pills nav-justified list-ubicacion col-xs-12 col-nopadding">
                        <li class="active col-xs-6 col-nopadding"><a class="filtroExterior" href="#lima" data-toggle="tab">Lima</a>
                      </li>
                      <li class="col-xs-6 col-nopadding"><a href="files/Lugares_de_Canje_2017_Provincias.pdf" target="_blank">Provincias</a>
                      </li>
                  </ul>
                </div>
                <div class="row row-nomargin distribuidor-mapa col-nopadding">
                  <div class="row-mapa">
                    <div class="col-lg-12 col-sm-12 col-xs-12 col-nopadding canjear-col">
                      <div class="col-lg-4 col-sm-4 col-xs-12 col-nopadding info-location tab-content clearfix">
                        <div class="info-location-content tab-pane active fade in" id="lima">
                          <p class="txt-bold">Nombre</p>
                          <p class="title">Multimarket Surquillo</p>
                          <p class="txt-bold">Dirección</p>
                          <p class="address">Av. República de Panamá 4299 </p>
                          <p class="txt-bold">Horario de atención </p>
                          <p class="atencion">Lunes a viernes de 8:00 a.m. a 9:00 p.m. Sábados y Domingos de 8:00 a.m. a 4:00 p.m.</p>
                          <p class="txt-bold">Teléfono</p>
                          <p class="phone">4194370 </p>
                          <p class="txt-bold">Restricciones</p>
                          <p class="restricciones">Los días 24 y 31 de diciembre se atenderá de 8:00 a.m. a 6:00 p.m. No se atenderá el día 25 de diciembre del 2017 ni el 1 de enero del 2018. Canje por pavo o cerdo (Cerdo sólo si tu vale lo indica).</p>
                        </div>
                        <div class="info-location-content tab-pane fade in" id="provincias">
                          <p class="txt-bold">Nombre</p>
                          <p class="title">Multimarket San Miguel</p>
                          <p class="txt-bold">Dirección</p>
                          <p class="address">Av. Elmer Faucett 579 </p>
                          <p class="txt-bold">Horario de atención </p>
                          <p class="atencion">Lunes a sábado 8:00 a.m. a 9:00 p.m. <br> Domingos 8:00 a.m. a 8:00 p.m</p>
                          <p class="txt-bold">Teléfono</p>
                          <p class="phone">4194380 </p>
                          <p class="txt-bold">Restricciones</p>
                          <p class="restricciones">Solo canje por pavo, no productos. <br>Indispensable separar tu pavo con 48 horas de anticipación como mínimo. Stock limitado. </p>
                        </div>
                      </div>
                      <div class="col-lg-8 col-sm-8 col-xs-12 col-nopadding">
                        <div class="filtro" >
                          <div class="col-md-4 col-sm-4 col-xs-12 filtro-input">
                            <div class="form-group" id="ciudad">
                              <select id="filtro_ciudad" class="selectpicker">
                                   <option>Seleccione ciudad</option>
                               </select>
                            </div>
                            <div class="form-group" id="distrito">
                              <select id="filtro_distrito" class="selectpicker">
                                <option>Seleccione distrito</option>
                              </select>
                            </div>
                            <div class="form-group" id="cate">
                              <select id="filtro_categoria" class="selectpicker">
                                <option>Seleccione lugar</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div id="map3" class="mapa-canjear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!--FIN COL CENTRAL DE 8-->
          </div>
        </div>
      </div> <!--fin row de distribuidor-->
    </div>
  </div>
</div>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCWUk5brFv69vhogpT6rr9wG38iLgVGSIQ&libraries=places'></script>
<style media="screen">
.distribuidor-mapa {
  background-color: #fbfbfb !important;
  background-image: inherit !important;
}
</style>
