<?php  namespace JD\request;
class StockWriteUpdateSkuStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stock.write.updateSkuStock";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $stockNum;
    	                        
	public function setStockNum($stockNum){
		$this->stockNum = $stockNum;
         $this->apiParas["stockNum"] = $stockNum;
	}

	public function getStockNum(){
	  return $this->stockNum;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                            }





        
 

