<?php  namespace JD\request;
class DspAdunitDmpGetBindCrowdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.dmp.getBindCrowd";
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
                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                   			private $displayType;
    	                        
	public function setDisplayType($displayType){
		$this->displayType = $displayType;
         $this->apiParas["displayType"] = $displayType;
	}

	public function getDisplayType(){
	  return $this->displayType;
	}

                        	}





        
 

