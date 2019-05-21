<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Country extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM country; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_country)
  {
    try{

      $id = $bean_country->getId();
      $name = $bean_country->getName();
      $topLevelDomain = $bean_country->getTopLevelDomain();
      $capital = $bean_country->getCapital();
      $region = $bean_country->getRegion();
      $subregion = $bean_country->getSubregion();
      $estado = $bean_country->getEstado();
      $alpha2Code = $bean_country->getAlpha2Code();
      $alpha3Code = $bean_country->getAlpha3Code();
      $callingCodes = $bean_country->getCallingCodes();
      $population = $bean_country->getPopulation();
      $latitud = $bean_country->getLatitud();
      $longuitud = $bean_country->getLonguitud();
      $demonym = $bean_country->getDemonym();
      $area = $bean_country->getArea();
      $timezones = $bean_country->getTimezones();
      $nativeName = $bean_country->getNativeName();
      $numericCode = $bean_country->getNumericCode();
      $flag = $bean_country->getFlag();
      $cioc = $bean_country->getCioc();

      $this->query = "INSERT INTO country
                      (
                        name,
                        topLevelDomain,
                        capital,
                        region,
                        subregion,
                        estado,
                        alpha2Code,
                        alpha3Code,
                        callingCodes,
                        population,
                        latitud,
                        longuitud,
                        demonym,
                        area,
                        timezones,
                        nativeName,
                        numericCode,
                        flag,
                        cioc
                      )
                      VALUES(
                        '$name',
                        '$topLevelDomain',
                        '$capital',
                        '$region',
                        '$subregion',
                        '$estado',
                        '$alpha2Code',
                        '$alpha3Code',
                        '$callingCodes',
                        '$population',
                        '$latitud',
                        '$longuitud',
                        '$demonym',
                        '$area',
                        '$timezones',
                        '$nativeName',
                        '$numericCode',
                        '$flag',
                        '$cioc'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_country)
  {
    try{
      $id = $bean_country->getId();
      $name = $bean_country->getName();
      $topLevelDomain = $bean_country->getTopLevelDomain();
      $capital = $bean_country->getCapital();
      $region = $bean_country->getRegion();
      $subregion = $bean_country->getSubregion();
      $alpha2Code = $bean_country->getAlpha2Code();
      $alpha3Code = $bean_country->getAlpha3Code();
      $callingCodes = $bean_country->getCallingCodes();
      $population = $bean_country->getPopulation();
      $latitud = $bean_country->getLatitud();
      $longuitud = $bean_country->getLonguitud();
      $demonym = $bean_country->getDemonym();
      $area = $bean_country->getArea();
      $timezones = $bean_country->getTimezones();
      $nativeName = $bean_country->getNativeName();
      $numericCode = $bean_country->getNumericCode();
      $flag = $bean_country->getFlag();
      $cioc = $bean_country->getCioc();

      $this->query = "UPDATE country SET 
                        name = '$name',
                        topLevelDomain = '$topLevelDomain',
                        capital = '$capital',
                        region = '$region',
                        subregion = '$subregion',
                        alpha2Code = '$alpha2Code',
                        alpha3Code = '$alpha3Code',
                        callingCodes = '$callingCodes',
                        population = '$population',
                        latitud = '$latitud',
                        longuitud = '$longuitud',
                        demonym = '$demonym',
                        area = '$area',
                        timezones = '$timezones',
                        nativeName = '$nativeName',
                        numericCode = '$numericCode',
                        flag = '$flag',
                        cioc = '$cioc'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_country)
  {
    try{
      $id = $bean_country->getId();

      $this->query = "SELECT * FROM country WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_country)
  {
    try{
      $id = $bean_country->getId();

      $this->query = "DELETE FROM country
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_country)
  {
    try{
      $estado = $bean_country->getEstado() ;

      $this->query = "SELECT * FROM country
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_country)
  {
    try{
      $id = $bean_country->getId();
      $estado = $bean_country->getEstado();

      $this->query = "UPDATE country SET 
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
