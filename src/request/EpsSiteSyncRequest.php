<?php  namespace JD\request;
class EpsSiteSyncRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eps.siteSync";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $deliveryNo;
                              public function setDeliveryNo($deliveryNo ){
                 $this->deliveryNo=$deliveryNo;
                 $this->apiParas["deliveryNo"] = $deliveryNo;
              }

              public function getDeliveryNo(){
              	return $this->deliveryNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $deliveryName;
                              public function setDeliveryName($deliveryName ){
                 $this->deliveryName=$deliveryName;
                 $this->apiParas["deliveryName"] = $deliveryName;
              }

              public function getDeliveryName(){
              	return $this->deliveryName;
              }
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $provinceId;
                              public function setProvinceId($provinceId ){
                 $this->provinceId=$provinceId;
                 $this->apiParas["provinceId"] = $provinceId;
              }

              public function getProvinceId(){
              	return $this->provinceId;
              }
                                                                                                                                                                                                                                                                                                                                              private $provinceName;
                              public function setProvinceName($provinceName ){
                 $this->provinceName=$provinceName;
                 $this->apiParas["provinceName"] = $provinceName;
              }

              public function getProvinceName(){
              	return $this->provinceName;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityId;
                              public function setCityId($cityId ){
                 $this->cityId=$cityId;
                 $this->apiParas["cityId"] = $cityId;
              }

              public function getCityId(){
              	return $this->cityId;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityName;
                              public function setCityName($cityName ){
                 $this->cityName=$cityName;
                 $this->apiParas["cityName"] = $cityName;
              }

              public function getCityName(){
              	return $this->cityName;
              }
                                                                                                                                                                                                                                                                                                                                              private $countyId;
                              public function setCountyId($countyId ){
                 $this->countyId=$countyId;
                 $this->apiParas["countyId"] = $countyId;
              }

              public function getCountyId(){
              	return $this->countyId;
              }
                                                                                                                                                                                                                                                                                                                                              private $countyName;
                              public function setCountyName($countyName ){
                 $this->countyName=$countyName;
                 $this->apiParas["countyName"] = $countyName;
              }

              public function getCountyName(){
              	return $this->countyName;
              }
                                                                                                                                                                                                                                                                                                                                              private $townId;
                              public function setTownId($townId ){
                 $this->townId=$townId;
                 $this->apiParas["townId"] = $townId;
              }

              public function getTownId(){
              	return $this->townId;
              }
                                                                                                                                                                                                                                                                                                                                              private $townName;
                              public function setTownName($townName ){
                 $this->townName=$townName;
                 $this->apiParas["townName"] = $townName;
              }

              public function getTownName(){
              	return $this->townName;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteNo;
                              public function setSiteNo($siteNo ){
                 $this->siteNo=$siteNo;
                 $this->apiParas["siteNo"] = $siteNo;
              }

              public function getSiteNo(){
              	return $this->siteNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteFullName;
                              public function setSiteFullName($siteFullName ){
                 $this->siteFullName=$siteFullName;
                 $this->apiParas["siteFullName"] = $siteFullName;
              }

              public function getSiteFullName(){
              	return $this->siteFullName;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteShortName;
                              public function setSiteShortName($siteShortName ){
                 $this->siteShortName=$siteShortName;
                 $this->apiParas["siteShortName"] = $siteShortName;
              }

              public function getSiteShortName(){
              	return $this->siteShortName;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteAddress;
                              public function setSiteAddress($siteAddress ){
                 $this->siteAddress=$siteAddress;
                 $this->apiParas["siteAddress"] = $siteAddress;
              }

              public function getSiteAddress(){
              	return $this->siteAddress;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteContactPerson;
                              public function setSiteContactPerson($siteContactPerson ){
                 $this->siteContactPerson=$siteContactPerson;
                 $this->apiParas["siteContactPerson"] = $siteContactPerson;
              }

              public function getSiteContactPerson(){
              	return $this->siteContactPerson;
              }
                                                                                                                                                                                                                                                                                                                                              private $siteContactPhone;
                              public function setSiteContactPhone($siteContactPhone ){
                 $this->siteContactPhone=$siteContactPhone;
                 $this->apiParas["siteContactPhone"] = $siteContactPhone;
              }

              public function getSiteContactPhone(){
              	return $this->siteContactPhone;
              }
                                                                                                                }





        
 

