</div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2021 Kanara Saraswat Association. <br> Sponsored by <a href="https://www.ajinkyatechnologies.in/">Ajinkya Technologies</a></strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <script src="<?php echo base_url()?>assets/jquery/jquery.min.js"></script> -->
<script
  src="https://code.jquery.com/jquery-2.2.0.min.js"
  integrity="sha256-ihAoc6M/JPfrIiIeayPE9xjin4UWjsx2mjW/rtmxLM4="
  crossorigin="anonymous"></script>

<!-- Bootstrap 4 -->
<!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<!-- <script type="text/javascript" src="https://cdn.datatables.net/
r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,
b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/
datatables.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js" integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.js" integrity="sha512-9yoLVdmrMyzsX6TyGOawljEm8rPoM5oNmdUiQvhJuJPTk1qoycCK7HdRWZ10vRRlDlUVhCA/ytqCy78+UujHng==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js" integrity="sha512-qzgd5cYSZcosqpzpn7zF2ZId8f/8CHmFKZ8j7mU4OUXTNRd5g+ZHBPsgKEwoqxCtdQvExE5LprwwPAgoicguNg==" crossorigin="anonymous"></script>

<script src="<?=base_url()?>assets/js/parsley.min.js"></script>
<script src="<?=base_url()?>assets/select2/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.widgets.min.js" integrity="sha512-dj/9K5GRIEZu+Igm9tC16XPOTz0RdPk9FGxfZxShWf65JJNU2TjbElGjuOo3EhwAJRPhJxwEJ5b+/Ouo+VqZdQ==" crossorigin="anonymous"></script>
<!-- <script src="assets/datatables/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.24/filtering/type-based/accent-neutralise.js"></script>

<script src="<?=base_url()?>assets/daterangepicker/daterangepicker.js"></script>

<script src="<?=base_url()?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="https://rawgit.com/padolsey/jQuery-Plugins/master/sortElements/jquery.sortElements.js"></script>
<script src="<?php echo base_url()?>AjaxMethods/loginAjaxMethods.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
<script>
function load_KSA_list(page,coloumn_name,orderby) {
    var list_limit=$("#table-show-list").val(); 
    var search = $("#searchBox").val();
    $.ajax({
      url: path + "Display_list/pagination/" +page,
      type: "GET",
      dataType: "JSON",
      headers: {
        "Authorization": $.cookie("jwt")
      },
      data:{
       page,search,list_limit,coloumn_name,orderby
      },
      success: function (data) {
        
        $("#tableID").html(data.list_table);
        $("#pagiantion_link").html(data.pagiantion_link);
      }
    })
  
  }
  $(document).ready(function(){
    localStorage.setItem("page",1);  
    load_KSA_list(localStorage.getItem("page"),"id","ASC");

    $("#searchBox").on("keyup", function() {
      var search = $("#searchBox").val();
     load_KSA_list(1);
    })
    $("#table-show-list").change(function(){
      var list_limit=$("#table-show-list").val();
     load_KSA_list(1);
    }) 
    var table = $('table');

  $(document).on("click", "#member_id_header,#city_header,#name_header,#pin_header", function () {
    var coloumn_name = $(this).data("name");
    var orderby=($(this).data("orderby")=="ASC")?"DESC":"ASC";
    load_KSA_list(1,coloumn_name,orderby);
    $("#export-pdf-btn").removeData('colounm_name');
    $("#export-pdf-btn").removeData('orderby_colunm');
    $("#export-pdf-btn").attr({ 'data-colounm_name': coloumn_name ,'data-orderby_colunm':orderby});
    $("#export-excel-btn").removeData('colounm_name');
    $("#export-excel-btn").removeData('orderby_colunm');
    $("#export-excel-btn").attr({ 'data-colounm_name': coloumn_name,'data-orderby_colunm':orderby});
    });
  });
  $(document).on("click", "#list-pagination li a", function(e){
      e.preventDefault();
      if($(this).data("ci-pagination-page") != undefined){
          localStorage.setItem("page", $(this).data("ci-pagination-page"));
          load_KSA_list(localStorage.getItem("page"));
      }
    });
</script>
<script src="<?php echo base_url()?>AjaxMethods/userAjaxMethods.js"></script> 
</body>
</html>
