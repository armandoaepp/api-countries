<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class CountryController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $country  = new Country();

      $data = $country->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $country  = new Country();
            
      $bean_country = new BeanCountry();
            
      $bean_country->setEstado($estado);

      $data = $country->getByEstado($bean_country);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $country  = new Country($this->cnx);

      $bean_country = new BeanCountry();
            
      $bean_country->setName($name);
      $bean_country->setTopLevelDomain($topleveldomain);
      $bean_country->setCapital($capital);
      $bean_country->setRegion($region);
      $bean_country->setSubregion($subregion);
      $bean_country->setAlpha2Code($alpha2code);
      $bean_country->setAlpha3Code($alpha3code);
      $bean_country->setCallingCodes($callingcodes);
      $bean_country->setPopulation($population);
      $bean_country->setLatitud($latitud);
      $bean_country->setLonguitud($longuitud);
      $bean_country->setDemonym($demonym);
      $bean_country->setArea($area);
      $bean_country->setTimezones($timezones);
      $bean_country->setNativeName($nativename);
      $bean_country->setNumericCode($numericcode);
      $bean_country->setFlag($flag);
      $bean_country->setCioc($cioc);
            
      $data = $country->save($bean_country) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $country  = new Country($this->cnx);
      $bean_country = new BeanCountry();
            
      $bean_country->setId($id);
      $bean_country->setName($name);
      $bean_country->setTopLevelDomain($topleveldomain);
      $bean_country->setCapital($capital);
      $bean_country->setRegion($region);
      $bean_country->setSubregion($subregion);
      $bean_country->setAlpha2Code($alpha2code);
      $bean_country->setAlpha3Code($alpha3code);
      $bean_country->setCallingCodes($callingcodes);
      $bean_country->setPopulation($population);
      $bean_country->setLatitud($latitud);
      $bean_country->setLonguitud($longuitud);
      $bean_country->setDemonym($demonym);
      $bean_country->setArea($area);
      $bean_country->setTimezones($timezones);
      $bean_country->setNativeName($nativename);
      $bean_country->setNumericCode($numericcode);
      $bean_country->setFlag($flag);
      $bean_country->setCioc($cioc);

      $data = $country->update($bean_country) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $country  = new Country($this->cnx);
            
      $bean_country = new BeanCountry();
            
      $bean_country->setId($id);
      $bean_country->setEstado($estado);

      $data = $country->updateEstado($bean_country) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $country  = new Country();

      $bean_country = new BeanCountry();

      $bean_country->setId($id);

      $data = $country->find( $bean_country) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($id)
  {
    try
    {

      $country  = new Country();

      $bean_country = new BeanCountry();

      $bean_country->setId($id);

      $data = $country->deleteById( $bean_country ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
