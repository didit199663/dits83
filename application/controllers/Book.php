<?php
require APPPATH . '/libraries/REST_Controller.php';

Class Book Extends REST_Controller{

	function __construct($config = 'rest') 	{
		parent::__construct($config);
	}

	function index_get(){
		$data = $this->db->get('books')->result();
		return $this -> response($data,200);
	}

	function index_post(){
		$isbn 		 = $this ->post('isbn');
		$title 		 = $this ->post('title');
		$writer 	 = $this ->post('writer');
		$describtion = $this ->post('describtion');
		$book = array (
			'title'				=>$title,
			'isbn'				=>$isbn,
			'writer'			=>$writer,
			'describtion'		=>$describtion,
	$insert = $this->db->insert($books));

	if ($insert) {
		$this->response($book,200);
	}else{
		$data = array('status'=>'gagal insert');
		$this -> response($data,500);
	}
}
}