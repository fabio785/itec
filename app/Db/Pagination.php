<?php 

namespace app\Db;

class Pagination{

	private $limit;
	
	private $results;

	private $pages;

	private $currentPage;

	public function __construct($results, $currentPage = 1, $limit=5){
		$this->results = $results;
		$this->limit = $limit;
		$this->currentPage = (is_numeric($currentPage) and $currentPage > 0)? $currentPage : 1;
		$this->calculate();


	}

	private function calculate(){
		$this->pages =$this->results>0? ceil($this->results / $this->limit): 1;

		$this->currentPage = $this->currentPage <= $this->currentPage? $this->currentPage : $this->pages;
	}
}


 ?>