<?php  namespace JD\request;
class MarketServiceQtSubscribeGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.qt.subscribe.get";
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
                                    	                   			private $serviceItemCode;
    	                                                                        
	public function setServiceItemCode($serviceItemCode){
		$this->serviceItemCode = $serviceItemCode;
         $this->apiParas["service_item_code"] = $serviceItemCode;
	}

	public function getServiceItemCode(){
	  return $this->serviceItemCode;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	}





        
 

