<?php  namespace JD\request;
class HostingdataJddpDataListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.hostingdata.jddp.data.list.get";
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
                                                        		                                    	                   			private $sqlId;
    	                        
	public function setSqlId($sqlId){
		$this->sqlId = $sqlId;
         $this->apiParas["sqlId"] = $sqlId;
	}

	public function getSqlId(){
	  return $this->sqlId;
	}

                        	                   			private $parameter;
    	                        
	public function setParameter($parameter){
		$this->parameter = $parameter;
         $this->apiParas["parameter"] = $parameter;
	}

	public function getParameter(){
	  return $this->parameter;
	}

                        	                        	                        	                            }





        
 

