<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private const PAGESIZE = 10;


	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("news_helper");
	}


	public function index()
	{		
		// buscamos las primeras noticias
		$news = $this->news(1, self::PAGESIZE);
		
		// asignamos valors por defecto
		$paginado = "Sin noticias";
		$posts = "No se encontro ninguna noticia";

		if(!empty($news) && $news["status"] == "ok"){ // si no esta vacio
			// y el estatus esta bien se devuelve la base del post		
			$total = $news["totalResults"];
			$totalnews = 1;
			if($total>0){
				$totalnews = ceil($total/  self::PAGESIZE); // se redondea al proxima
			}
			
			$paginado =  $this->load->view("paginado", array(
							"totalPaginas" => $totalnews							
						),true);						
			$posts = $this->load->view("posts", array("articles" => $news["articles"]),true);
		}
		
		// cargamos primera vista
		$this->load->view('index', array(
			"paginado" => $paginado,
			"posts"=>$posts
		));
	}	

	// vista que obtiene las noticias mas actuales
	public function posts(){
		$page = $this->input->get("page");
		$articles = array();
		$news = $this->news($page, self::PAGESIZE);		
		if(!empty($news) && $news["status"] == "ok"){ // si no esta vacio
			$articles = $news["articles"];
		}	
		$posts = $this->load->view("posts", array("articles" => $articles),true);
		echo $posts;
	}

	// se conecta a la api con un set de opciones 
	private function news($page=1, $pageSize){
		
		$key = "8ff28e37c6ac4578ac5d4a2f96915466";
		$news = get_news("http://newsapi.org/v2/top-headlines",
			array(// arreglo de parametros				
				"page"=>$page,
				"pageSize"=>$pageSize,
				"country"=>"mx",				
				"apiKey"=>$key
			)
		);
		
		return $news;
	}

}
