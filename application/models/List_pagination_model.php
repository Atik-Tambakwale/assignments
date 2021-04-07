<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_pagination_model extends CI_Model{

	function count_all(){
		$query=$this->db->get("ksa_list");
		return $query->num_rows();
	}
function fetch_details($search,$limit,$start,$colounm_name,$orderby){
	
		$output='';

		$this->db->like('CITY',$search)->or_like('CITY',$search)->like('ADDRESS_1',$search)->like('ADDRESS_2',$search)->like('ADDRESS_3',$search);
		$this->db->or_like('NAME',$search)->or_like('TITLE',$search)->like('NAME',$search);
		$this->db->or_like('PIN',$search);
		
		$this->db->order_by($colounm_name,$orderby);
		$query=$this->db->limit($limit,$start)
				 ->get('ksa_list');
		if(count($query->result())>1){
			$output .='
				<thead>
				<tr>
				<th>#</th>';
				if($colounm_name=="MEMBER_ID"){
					$output.='<th id="member_id_header" data-name="MEMBER_ID" data-orderby="'.$orderby.'">MEMBER_ID&nbsp;<i class="fas fa-sort" style="font-size:25px;"></i></th>';
				}else{
					$output.='<th id="member_id_header" data-name="MEMBER_ID" data-orderby="none">MEMBER_ID</i></th>';
				}
				$output.='<th>MEMBER_TYPE</th>
				<th>TITLE</th>';
				if($colounm_name=="NAME"){
					$output.='<th id="name_header" data-name="NAME" data-orderby="'.$orderby.'">NAME&nbsp;<i class="fas fa-sort"></i></th>';
				}else{
					$output.='<th id="name_header" data-name="NAME" data-orderby="none">NAME</i></th>';
				}
				
				$output.='<th>ADDRESS_1</th>
				<th>ADDRESS_2</th>
				<th>ADDRESS_3</th>
				<th>ADDRESS_4</th>';
				if($colounm_name=="CITY"){
					$output.='<th id="city_header" data-name="CITY" data-orderby="'.$orderby.'">CITY&nbsp;<i class="fas fa-sort"></i></th>';
				}else{
					$output.='<th id="city_header" data-name="CITY" data-orderby="none">CITY</i></th>';
				}
				if($colounm_name=="PIN"){
					$output.='<th id="pin_header" data-name="PIN" data-orderby="'.$orderby.'">PIN&nbsp;<i class="fas fa-sort"></i></th>';
				}else{
					$output.='<th id="pin_header" data-name="PIN" data-orderby="none">PIN</i></th>';
				}
				$output.='
				<th>MOBILE</th>
				<th>EMAIL</th>
				<th>MONTH</th>
				<th>YEAR</th>
				<th>DESTFILE</th>
				<th>MAGRETURN</th>
				<th>STOPMAIL</th>
				<th>EXPIRED</th>
				<th>HANDDELV</th>
				<th>ACTIONS</th>
			</tr>
				</thead>
				<tbody class="tbody">
		';
		foreach ($query->result() as $row) {
			$output.='<tr>
						<td>'.(($row->id)-1).'</td>
						<td>'.$row->MEMBER_ID .'</td>
						<td>'.$row->MEMBER_TYPE .'</td>
						<td>'.$row->TITLE .'</td>
						<td>'.$row->NAME .'</td>
						<td>'.$row->ADDRESS_1 .'</td>
						<td>'.$row->ADDRESS_2 .'</td>
						<td>'.$row->ADDRESS_3 .'</td>
						<td>'.$row->ADDRESS_4 .'</td>
						<td>'.$row->CITY .'</td>
						<td>'.$row->PIN .'</td>
						<td>'.$row->MOBILE .'</td>
						<td>'.$row->EMAIL .'</td>
						<td>'.$row->MONTH .'</td>
						<td>'.$row->YEAR .'</td>
						<td>'.$row->DESTFILE .'</td>
						<td>'.$row->MAGRETURN .'</td>
						<td>'.$row->STOPMAIL .'</td>
						<td>'.$row->EXPIRED .'</td>
						<td>'.$row->HANDDELV .'</td>
						<td>
							<div class="row " style="font-size: 18px;position: relative;top: 12px;left: 7px;">
								<a class="view-btn" data-toggle="modal" data-target="#view-modal" data-view_id='.$row->id.'><i class="fas fa-eye p-2"></i></a>
								<a class="delete-btn" data-delete_id='.$row->id.'><i class="fas fa-trash-alt p-2"></i></a>
							</div>
						</td>
					  </tr>';
		}
		$output.='</tbody>';
		}
		else{
			$output="<p style='text-align:center;font-size:25px;'>No list available for display</p>";
		}
		return $output;		
	}

}
?>      
