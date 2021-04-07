<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('layout/header');
$this->load->view('layout/sidebar');

?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DashBoard/Member Lists</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Member List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<div class="card card-primary card-outline card-outline-tabs">
 	<div class="card-body">
        <div class="col-xl-12">
           <input type='hidden' id='sort' value='asc'>
           <div class="row m-2">
              <div class="col-md-6" style="font-size: 20px;">
                <div class="d-flex">
                  <div>Shows&nbsp;</div>
                  <div>
                    <select class="form-control" name="table-show-list" id="table-show-list">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </div>
                  <div>
                    &nbsp;entries
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="text-align: right;">
               <input class="form-control" id="searchBox" type="text" placeholder="Search..">
              </div>
           </div>
           <br>
           
					<div class="table-response" id="load-KSA-list">
            <table id="tableID" class="table table-bordered" style="font-size:9px;table-layout:fixed;width:100%;word-break:break-all;">
          
            </table>
          </div>
          <div id="pagiantion_link"></div>
          <div class="row">
              <div class="col-xl-6 mt-3">
                  <div class="row" style="margin-left: -7px;">
                    <?php echo form_open_multipart('',['id'=>'excel_file_upload','data-parsley-validate'=>'true'])?>
                        <div class="col-sm-10 ">
                          <div class="form-group">
                            <label for="">Import Excel Sheet (Only .xlsx, .xls, .csv Extension File) </label><br>
                            <input type="file" name="excel_file" id="excel_file" placeholder="select xls,csv,xlsx extensions" data-parsley-required="true">
                          </div>
                        </div>
                        <div class="col-sm-2"style="margin-top: 19px;" >
                            <button type="submit" id="import_btn"class="btn btn-primary btn-sm">IMPORT</button>
                        </div> 
                    <?php echo form_close()?>
                  </div>
              </div>
              <div class="col-xl-6">
                      
                      <div class="col-md-6"><div id="pagination_link"></div></div>
                    
                    
              </div>
          </div>
          <button type="button" class="btn btn-primary" id="export-pdf-btn" data-colounm_name="" data-orderby_colunm="">Export PDF</a>
          <?php echo form_close()?>
          
          <button type="button" class="btn btn-success" id="export-excel-btn" data-colounm_name="" data-orderby_colunm="">Export Excel</a>
          
        </div>
	</div>	
</div>
<div class="modal fade" id="view-modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">KSA Member Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="p-4">
          <h3>Person Details</h3>
          <table class="table table-bordered">
            <thead>
              <th>TITLE</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>MOBILE</th>
             
            </thead>
            <tbody>
                <tr>
                  <td id="updated_title"></td>
                  <td id="updated_name"></td>
                  <td id="updated_emial"></td>
                  <td id="updated_mobile"></td>
                 
                </tr>
            </tbody>
          </table>
          <h3>Location Details</h3>
          <table class="table table-bordered ">
            <thead>
              
              <th>ADDRESS 1</th>
              <th>ADDRESS 2</th>
              <th>ADDRESS 3</th>
              <th>ADDRESS 4</th>
              <th>CITY</th>
              <th>PIN</th>
            </thead>
            <tbody>
              <tr>
                <td id="updated_address_1"></td>
                <td id="updated_address_2"></td>
                <td id="updated_address_3"></td>
                <td id="updated_address_4"></td>
                <td id="updated_city"></td>
                <td id="updated_pin"></td>
              </tr>
            </tbody>
          </table>
          <h3>Other Details</h3>
          <table class="table table-bordered">
            <thead>
              <th>MONTH</th>
              <th>YEAR</th>
              <th>MAGZINE RETURN</th>
              <th>STOP MAILS</th>
              <th>EXPIRED</th>
              <th>HAND DEVELOP</th>
              <th></th>
            </thead>
            <tbody>
              <td id="updated_month"></td>
              <td id="updated_year"></td>
              <td id="updated_mag_return"></td>
              <td id="updated_stop_mail"></td>
              <td id="updated_expired"></td>
              <td id="updated_hand_develop"></td>
            </tbody>
          </table>
        </div>
      </div>
      
    </div>
  </div>
</div>
<?php
	$this->load->view('layout/footer');
?>

	