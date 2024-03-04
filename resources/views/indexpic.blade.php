<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>VVCYF | Front Images</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{  asset('tempad/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('tempad/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{  asset('tempad/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{  asset('tempad/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{  asset('tempad/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link"></a>
    </ul>
  </nav>
  <!-- /.navbar -->
   @include('includes.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Front Images</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('logout')}}">Logout</a></li>
              <!-- <li class="breadcrumb-item active">Logout</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <button type="button" class="btn btn-primary addbtn" data-toggle="modahl" data-target="#examplueModal">
  Add Image 
</button>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div id="dataa"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
     <form action="{{ route('add.frontimg') }}" enctype="multipart/form-data"  method="POST" id="addfrontimg">
         @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Front Images
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="errMsgContainer" id="errMsgContainers">
      </div>
      <div class="form-group">
             <input type="file" class="form-control"  name="front_file" id="front_file" placeholder="Home File">
             <span class="text-danger error-text image_preview" id="image_preview"></span>
             <span class="text-danger error-text front_file_error" id="front_file_error"></span>
             
        </div>
        <div class="form-group">
             <input type="text" class="form-control"  name="front_title" id="front_title" placeholder="Front Title">
             <span class="text-danger error-text front_title_error" id="front_title_error"></span>
        </div>
       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden" class="form-control"  name="id" id="id">
        <button type="submit" class="btn btn-primary addimage">Save</button>
        <button type="button" class="btn btn-primary editimage">Edit</button>
      </div>
    </div>
  </div>
</form>
</div>


  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2023-2024 <b>vvcyf</b>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{  asset('tempad/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{  asset('tempad/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{  asset('tempad/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{  asset('tempad/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{  asset('tempad/dist/js/adminlte.min.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     fetchAllTeachers();
     function fetchAllTeachers(){
          $.ajax({
            url:'{{ route('frontimg.fetchAll')}}',
            method:'get',
            success: function(response){
                $("#dataa").html(response);
                $("#addfrontimg")[0].reset();
                $("#exampleModal").modal('hide');

     
            }

          });
     }

  
</script>



<script>
    $(document).ready(function(){
        $(".addbtn").click(function(){
            
            $('#errMsgContainers').css("display","none");
            $(".addimage").show();
            $(".editimage").hide();
            $("#exampleModal").modal('show');
        });
     
    });

</script>

<script>
    //  $(document).ready(function(){
        
    $('#addfrontimg').on('submit',function(e){

         e.preventDefault();
          var form  = this;
        $.ajax({
          
            url: $(form).attr('action'),
            method:'post',
            data:new FormData(form),
            dataType:'json',
            processData:false,
            contentType:false,
            success:function(data){ 
                if(data.code == 0){
                   $.each(data.error, function(prefix,val){
                    $(form).find('span.'+prefix+'_error').text(val[0]);
                  });
                }else{
                  
                $("#addfrontimg")[0].reset();
                $("#exampleModal").modal('hide');
                fetchAllTeachers();
             
             
                }
             }
        });

    });

    //  });
</script>

<script>
    $(document).ready(function(){      
    $(document).on('click','.delete',function(e){

        e.preventDefault();  
        let id = $(this).data('id');
        if(confirm('Are you sure you want to delete Users details')){
        $.ajax({
          url: "{{ route('delete.frontimg') }}",
          method:'post',
          data:{id:id},
          success:function(res){     
              if(res.status =='success'){
                  // $('.table').load(location.href+' .table');
                  fetchAllTeachers();
              }

          }
      });
             
        }

    })

    });
</script>

<script>
    // $(document).ready(function(){
      $(document).on('click','.edit',function(e){
           
            $('#errMsgContainers').css("display","none");
             $(".editimage").hide();
            $(".addimage").show();
            $("#exampleModal").modal('show');

            let front_title = $(this).data('front_title');
            let hidden_image = $(this).data('front_file');
            let id = $(this).data('id');

             $('#front_title').val(front_title);; 
            $('#id').val(id);
             $('#image_preview').html('<img src="/FrontImgfile/'+hidden_image+'" alt="" class="d-flex align-self-start rounded mr-3" height="64">');
         });
     
    // });

</script>



</body>
</html>


