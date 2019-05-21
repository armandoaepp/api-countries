
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/country/country.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $country_controller = new CountryController();


  $data = json_decode( file_get_contents('https://restcountries.eu/rest/v2/all'), true );
//  var_dump($data);

  for ($i=0; $i < count($data) ; $i++)
  {
    echo $data[$i]['name']."<br>";


    $name           = $data[$i]["name"] ;
    $topLevelDomain = $data[$i]["topLevelDomain"][0] ;
    $capital        = $data[$i]["capital"] ;
    $region         = $data[$i]["region"] ;
    $subregion      = $data[$i]["subregion"] ;
    $alpha2Code     = $data[$i]["alpha2Code"] ;
    $alpha3Code     = $data[$i]["alpha3Code"] ;
    $callingCodes   = $data[$i]["callingCodes"][0] ;
    $population     = $data[$i]["population"] ;
    $latitud        = $data[$i]["latlng"][0] ;
    $longuitud      = $data[$i]["latlng"][1] ;
    $demonym        = $data[$i]["demonym"] ;
    $area           = $data[$i]["area"] ;
    $timezones      = $data[$i]["timezones"][0] ;
    $nativeName     = $data[$i]["nativeName"] ;
    $numericCode    = $data[$i]["numericCode"] ;
    $flag           = $data[$i]["flag"] ;
    $cioc           = $data[$i]["cioc"] ;

    $params = array(
      "name"           => $name,
      "topLevelDomain" => $topLevelDomain,
      "capital"        => $capital,
      "region"         => $region,
      "subregion"      => $subregion,
      "alpha2Code"     => $alpha2Code,
      "alpha3Code"     => $alpha3Code,
      "callingCodes"   => $callingCodes,
      "population"     => $population,
      "latitud"        => $latitud,
      "longuitud"      => $longuitud,
      "demonym"        => $demonym,
      "area"           => $area,
      "timezones"      => $timezones,
      "nativeName"     => $nativeName,
      "numericCode"    => $numericCode,
      "flag"           => $flag,
      "cioc"           => $cioc,
    );

    // echo "<pre>";
    // print_r($params);
    // echo "</pre>";

    $response = $country_controller->save($params);

  }


  /*
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


  $response = $country_controller->save($params);

  if($response){
    header("Location: ./country.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
 */