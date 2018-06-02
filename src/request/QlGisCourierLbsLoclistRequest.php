<?php  namespace JD\request;
class QlGisCourierLbsLoclistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ql.gis.courier.lbs.loclist";
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
                                    	                   			private $courierId;
    	                        
	public function setCourierId($courierId){
		$this->courierId = $courierId;
         $this->apiParas["courierId"] = $courierId;
	}

	public function getCourierId(){
	  return $this->courierId;
	}

                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $dateStr;
    	                        
	public function setDateStr($dateStr){
		$this->dateStr = $dateStr;
         $this->apiParas["dateStr"] = $dateStr;
	}

	public function getDateStr(){
	  return $this->dateStr;
	}

                        	                   			private $appCode;
    	                        
	public function setAppCode($appCode){
		$this->appCode = $appCode;
         $this->apiParas["appCode"] = $appCode;
	}

	public function getAppCode(){
	  return $this->appCode;
	}

                        	                   			private $sign;
    	                        
	public function setSign($sign){
		$this->sign = $sign;
         $this->apiParas["sign"] = $sign;
	}

	public function getSign(){
	  return $this->sign;
	}

}





        
 

