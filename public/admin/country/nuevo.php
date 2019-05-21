
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Country" ;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
      "titulo"     => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1,0]
    );

    $sidebar = array(
      "sidebar_class"     => "",
      "sidebar_toggle"      => "only",
      "sidebar_active"      => [1,0],
    );

    require_once "../layout/head_links.phtml";
  ?>
</head>

<body>
  <?php require "../layout/header.phtml"; ?>

  <div class="app-wrap">
    <?php require_once "../layout/sidebar.phtml";?>
    <main role="main" class="main">

      <nav class="full-content" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-shape shadow-sm radius-0">
          <li class="breadcrumb-item">
            <a href="admin">
              <i class="fas fa-home"></i> Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="admin/country/country.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            Nuevo <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Nuevo <?php echo $title_page; ?> </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/country/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Name: </label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="topLevelDomain">TopLevelDomain: </label>
                  <input type="text" class="form-control" name="topLevelDomain" id="topLevelDomain" placeholder="TopLevelDomain">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="capital">Capital: </label>
                  <input type="text" class="form-control" name="capital" id="capital" placeholder="Capital">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="region">Region: </label>
                  <input type="text" class="form-control" name="region" id="region" placeholder="Region">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="subregion">Subregion: </label>
                  <input type="text" class="form-control" name="subregion" id="subregion" placeholder="Subregion">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="alpha2Code">Alpha2Code: </label>
                  <input type="text" class="form-control" name="alpha2Code" id="alpha2Code" placeholder="Alpha2Code">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="alpha3Code">Alpha3Code: </label>
                  <input type="text" class="form-control" name="alpha3Code" id="alpha3Code" placeholder="Alpha3Code">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="callingCodes">CallingCodes: </label>
                  <input type="text" class="form-control" name="callingCodes" id="callingCodes" placeholder="CallingCodes">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="population">Population: </label>
                  <input type="text" class="form-control" name="population" id="population" placeholder="Population">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="latitud">Latitud: </label>
                  <input type="text" class="form-control" name="latitud" id="latitud" placeholder="Latitud">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="longuitud">Longuitud: </label>
                  <input type="text" class="form-control" name="longuitud" id="longuitud" placeholder="Longuitud">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="demonym">Demonym: </label>
                  <input type="text" class="form-control" name="demonym" id="demonym" placeholder="Demonym">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="area">Area: </label>
                  <input type="text" class="form-control" name="area" id="area" placeholder="Area">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="timezones">Timezones: </label>
                  <input type="text" class="form-control" name="timezones" id="timezones" placeholder="Timezones">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nativeName">NativeName: </label>
                  <input type="text" class="form-control" name="nativeName" id="nativeName" placeholder="NativeName">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="numericCode">NumericCode: </label>
                  <input type="text" class="form-control" name="numericCode" id="numericCode" placeholder="NumericCode">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="flag">Flag: </label>
                  <input type="text" class="form-control" name="flag" id="flag" placeholder="Flag">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cioc">Cioc: </label>
                  <input type="text" class="form-control" name="cioc" id="cioc" placeholder="Cioc">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/country/country.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml"; ?>

</body>

</html>
