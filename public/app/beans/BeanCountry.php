<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCountry{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $name;
  private $topLevelDomain;
  private $capital;
  private $region;
  private $subregion;
  private $estado = 1 ;
  private $alpha2Code;
  private $alpha3Code;
  private $callingCodes;
  private $population;
  private $latitud;
  private $longuitud;
  private $demonym;
  private $area;
  private $timezones;
  private $nativeName;
  private $numericCode;
  private $flag;
  private $cioc;

  #Auto Increment Item

  # METODOS
  public function setId($id_)
  {
    $this->id = Validation::validate( $id_ );
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name_)
  {
    $this->name = Validation::validate( $name_ );
  }

  public function getName()
  {
    return $this->name;
  }

  public function setTopLevelDomain($topLevelDomain_)
  {
    $this->topLevelDomain = Validation::validate( $topLevelDomain_ );
  }

  public function getTopLevelDomain()
  {
    return $this->topLevelDomain;
  }

  public function setCapital($capital_)
  {
    $this->capital = Validation::validate( $capital_ );
  }

  public function getCapital()
  {
    return $this->capital;
  }

  public function setRegion($region_)
  {
    $this->region = Validation::validate( $region_ );
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setSubregion($subregion_)
  {
    $this->subregion = Validation::validate( $subregion_ );
  }

  public function getSubregion()
  {
    return $this->subregion;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setAlpha2Code($alpha2Code_)
  {
    $this->alpha2Code = Validation::validate( $alpha2Code_ );
  }

  public function getAlpha2Code()
  {
    return $this->alpha2Code;
  }

  public function setAlpha3Code($alpha3Code_)
  {
    $this->alpha3Code = Validation::validate( $alpha3Code_ );
  }

  public function getAlpha3Code()
  {
    return $this->alpha3Code;
  }

  public function setCallingCodes($callingCodes_)
  {
    $this->callingCodes = Validation::validate( $callingCodes_ );
  }

  public function getCallingCodes()
  {
    return $this->callingCodes;
  }

  public function setPopulation($population_)
  {
    $this->population = Validation::validate( $population_ );
  }

  public function getPopulation()
  {
    return $this->population;
  }

  public function setLatitud($latitud_)
  {
    $this->latitud = Validation::validate( $latitud_ );
  }

  public function getLatitud()
  {
    return $this->latitud;
  }

  public function setLonguitud($longuitud_)
  {
    $this->longuitud = Validation::validate( $longuitud_ );
  }

  public function getLonguitud()
  {
    return $this->longuitud;
  }

  public function setDemonym($demonym_)
  {
    $this->demonym = Validation::validate( $demonym_ );
  }

  public function getDemonym()
  {
    return $this->demonym;
  }

  public function setArea($area_)
  {
    $this->area = Validation::validate( $area_ );
  }

  public function getArea()
  {
    return $this->area;
  }

  public function setTimezones($timezones_)
  {
    $this->timezones = Validation::validate( $timezones_ );
  }

  public function getTimezones()
  {
    return $this->timezones;
  }

  public function setNativeName($nativeName_)
  {
    $this->nativeName = Validation::validate( $nativeName_ );
  }

  public function getNativeName()
  {
    return $this->nativeName;
  }

  public function setNumericCode($numericCode_)
  {
    $this->numericCode = Validation::validate( $numericCode_ );
  }

  public function getNumericCode()
  {
    return $this->numericCode;
  }

  public function setFlag($flag_)
  {
    $this->flag = Validation::validate( $flag_ );
  }

  public function getFlag()
  {
    return $this->flag;
  }

  public function setCioc($cioc_)
  {
    $this->cioc = Validation::validate( $cioc_ );
  }

  public function getCioc()
  {
    return $this->cioc;
  }

}
