
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
    echo $i." - ". $data[$i]['name']."<br>";

    $name           = $data[$i]["name"] ;
    $topLevelDomain = $data[$i]["topLevelDomain"][0] ;
    $capital        = $data[$i]["capital"] ;
    $region         = $data[$i]["region"] ;
    $subregion      = $data[$i]["subregion"] ;
    $alpha2Code     = $data[$i]["alpha2Code"] ;
    $alpha3Code     = $data[$i]["alpha3Code"] ;
    $callingCodes   = $data[$i]["callingCodes"][0] ;
    $population     = $data[$i]["population"] ;
    $latitud        = !empty($data[$i]["latlng"][0]) ? $data[$i]["latlng"][0] : null ;
    $longuitud      = !empty($data[$i]["latlng"][1]) ? $data[$i]["latlng"][1] : null ;
    $demonym        = $data[$i]["demonym"] ;
    $area           = $data[$i]["area"] ;
    $timezones      = $data[$i]["timezones"][0] ;
    $nativeName     = $data[$i]["nativeName"] ;
    $numericCode    = $data[$i]["numericCode"] ;
    $flag           = $data[$i]["flag"] ;
    $cioc           = $data[$i]["cioc"] ;

    $params = array(
      "name"           => $name,
      "topleveldomain" => $topLevelDomain,
      "capital"        => $capital,
      "region"         => $region,
      "subregion"      => $subregion,
      "alpha2code"     => $alpha2Code,
      "alpha3code"     => $alpha3Code,
      "callingcodes"   => $callingCodes,
      "population"     => $population,
      "latitud"        => $latitud,
      "longuitud"      => $longuitud,
      "demonym"        => $demonym,
      "area"           => $area,
      "timezones"      => $timezones,
      "nativename"     => $nativeName,
      "numericcode"    => $numericCode,
      "flag"           => $flag,
      "cioc"           => $cioc,
    );

    // echo "<pre>";
    // print_r($params);
    // echo "</pre>";

    $response = $country_controller->save($params);
  }