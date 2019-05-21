
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/country/country.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $country_controller = new CountryController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $name   = $_POST["name"] ;
  $topLevelDomain   = $_POST["topLevelDomain"] ;
  $capital   = $_POST["capital"] ;
  $region   = $_POST["region"] ;
  $subregion   = $_POST["subregion"] ;
  $alpha2Code   = $_POST["alpha2Code"] ;
  $alpha3Code   = $_POST["alpha3Code"] ;
  $callingCodes   = $_POST["callingCodes"] ;
  $population   = $_POST["population"] ;
  $latitud   = $_POST["latitud"] ;
  $longuitud   = $_POST["longuitud"] ;
  $demonym   = $_POST["demonym"] ;
  $area   = $_POST["area"] ;
  $timezones   = $_POST["timezones"] ;
  $nativeName   = $_POST["nativeName"] ;
  $numericCode   = $_POST["numericCode"] ;
  $flag   = $_POST["flag"] ;
  $cioc   = $_POST["cioc"] ;
  $params = array(
    "id"   => $id,
    "name"   => $name,
    "topLevelDomain"   => $topLevelDomain,
    "capital"   => $capital,
    "region"   => $region,
    "subregion"   => $subregion,
    "alpha2Code"   => $alpha2Code,
    "alpha3Code"   => $alpha3Code,
    "callingCodes"   => $callingCodes,
    "population"   => $population,
    "latitud"   => $latitud,
    "longuitud"   => $longuitud,
    "demonym"   => $demonym,
    "area"   => $area,
    "timezones"   => $timezones,
    "nativeName"   => $nativeName,
    "numericCode"   => $numericCode,
    "flag"   => $flag,
    "cioc"   => $cioc,
  );


  $response = $country_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./country.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
