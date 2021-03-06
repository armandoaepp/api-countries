<?php 

/**
 * [Api Index Auth  Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

  header('content-type: application/json; charset=utf-8');
  require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
  $inputs = json_decode(file_get_contents("php://input"));
  $evento = $inputs->accion;
}

switch($evento)
{
  case "list":
    try
    {
      $country_controller = new CountryController() ; 

       $data = $country_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "set":
    
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $country_controller = new CountryController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $name = $inputs->name;
      $topleveldomain = $inputs->topLevelDomain;
      $capital = $inputs->capital;
      $region = $inputs->region;
      $subregion = $inputs->subregion;
      $alpha2code = $inputs->alpha2Code;
      $alpha3code = $inputs->alpha3Code;
      $callingcodes = $inputs->callingCodes;
      $population = $inputs->population;
      $latitud = $inputs->latitud;
      $longuitud = $inputs->longuitud;
      $demonym = $inputs->demonym;
      $area = $inputs->area;
      $timezones = $inputs->timezones;
      $nativename = $inputs->nativeName;
      $numericcode = $inputs->numericCode;
      $flag = $inputs->flag;
      $cioc = $inputs->cioc;
        
      $params = array(
                'id'=> $id,
                'name'=> $name,
                'topleveldomain'=> $topleveldomain,
                'capital'=> $capital,
                'region'=> $region,
                'subregion'=> $subregion,
                'alpha2code'=> $alpha2code,
                'alpha3code'=> $alpha3code,
                'callingcodes'=> $callingcodes,
                'population'=> $population,
                'latitud'=> $latitud,
                'longuitud'=> $longuitud,
                'demonym'=> $demonym,
                'area'=> $area,
                'timezones'=> $timezones,
                'nativename'=> $nativename,
                'numericcode'=> $numericcode,
                'flag'=> $flag,
                'cioc'=> $cioc,
              ) ; 
        
      $data = $country_controller->save($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "upd":
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $country_controller = new CountryController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $name = $inputs->name;
      $topleveldomain = $inputs->topLevelDomain;
      $capital = $inputs->capital;
      $region = $inputs->region;
      $subregion = $inputs->subregion;
      $alpha2code = $inputs->alpha2Code;
      $alpha3code = $inputs->alpha3Code;
      $callingcodes = $inputs->callingCodes;
      $population = $inputs->population;
      $latitud = $inputs->latitud;
      $longuitud = $inputs->longuitud;
      $demonym = $inputs->demonym;
      $area = $inputs->area;
      $timezones = $inputs->timezones;
      $nativename = $inputs->nativeName;
      $numericcode = $inputs->numericCode;
      $flag = $inputs->flag;
      $cioc = $inputs->cioc;
        
      $params = array(
                'id'=> $id,
                'name'=> $name,
                'topleveldomain'=> $topleveldomain,
                'capital'=> $capital,
                'region'=> $region,
                'subregion'=> $subregion,
                'alpha2code'=> $alpha2code,
                'alpha3code'=> $alpha3code,
                'callingcodes'=> $callingcodes,
                'population'=> $population,
                'latitud'=> $latitud,
                'longuitud'=> $longuitud,
                'demonym'=> $demonym,
                'area'=> $area,
                'timezones'=> $timezones,
                'nativename'=> $nativename,
                'numericcode'=> $numericcode,
                'flag'=> $flag,
                'cioc'=> $cioc,
              ) ; 
        
      $data = $country_controller->update($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "updestado":
    try
    {

      $id = $inputs->id;
      $estado = $inputs->estado;

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $country_controller = new CountryController() ; 

      $data = $country_controller->updateEstado( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "find":
    try
    {

      $id = $_GET["id"] ;
      $country_controller = new CountryController() ; 

      $data = $country_controller->find( $id) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "delete":
    try
    {

      $id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $country_controller = new CountryController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $country = $country_controller->find( $id );

        $data = $country_controller->deleteById( $id );

			}
			else
			{
				$data = $country_controller->updateEstado($params);
			} 

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
  break;

}
