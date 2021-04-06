<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Display_list extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index(){
		if(!$this->session->userdata("id"))
			return redirect(base_url());
		$this->load->view('display-list/display_list');	
	}
	public function pagination(){
		$this->load->model("list_pagination_model");
		$this->load->library("pagination");
		$config=array();
		$config["base_url"]="#";
		$config["total_rows"]=$this->list_pagination_model->count_all();
		
		$config["per_page"]=$this->input->get('list_limit');
		$config["uri_segment"]=3;
		$config["use_page_numbers"]=TRUE;
		$config["full_tag_open"]='<ul class="pagination" id="list-pagination">';
		$config["full_tag_close"]='</ul>';
		$config["first_tag_open"]='<li>';
		$config["first_tag_close"]='</li>';
		
		$config["last_tag_open"]='<li>';
		$config["last_tag_close"]='</li>';
		$config['next_link']='&gt;';
		$config["next_tag_open"]='<li>';
		$config["next_tag_close"]='</li>';
		$config["prev_link"]="&lt;";
		$config["prev_tag_open"]='<li>';
		$config["prev_tag_close"]='</li>';
		$config["cur_tag_open"]="<li class='active'><a href='#'>";
		$config["cur_tag_close"]="</a></li>";
		$config["num_tag_open"]="<li>";
		$config["num_tag_close"]="</li>";
		$config["num_links"]=1;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		$start = ($page - 1) * $config['per_page']; 
		$search=$this->input->get('search');
		$coloumn_name=$this->input->get("coloumn_name");
		$orderby=$this->input->get('orderby');
		$output=array(
			'pagiantion_link'=>$this->pagination->create_links(),
			'list_table'=>$this->list_pagination_model->fetch_details($search,$config["per_page"],$start,$coloumn_name,$orderby)
		);
		echo json_encode($output);
	}
}
?>