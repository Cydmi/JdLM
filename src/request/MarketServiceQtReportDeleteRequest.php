<?php  namespace JD\request;
class MarketServiceQtReportDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.service.qt.report.delete";
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
                                    	                   			private $qtCode;
    	                        
	public function setQtCode($qtCode){
		$this->qtCode = $qtCode;
         $this->apiParas["qtCode"] = $qtCode;
	}

	public function getQtCode(){
	  return $this->qtCode;
	}

                        	}





        
 

