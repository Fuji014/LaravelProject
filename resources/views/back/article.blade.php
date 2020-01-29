@extends('back.layout.master')

@section('title')
  Manage Article
@endsection

@section('meta')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('body')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Article</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Articles</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            {{-- card start --}}
            <div class="card">
            <div class="card-header clearfix">
              <h3 class="card-title float-left">Table Article</h3>
              <a href="{{ route('articleCreate') }}" class="btn btn-success float-right">Add New Article</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="userData" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Author</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                      <th>Actions</th>
                    </tr> 
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            {{-- card end --}}

          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>

<!---//   modals     //--->
  @include('back.modals.articleDeleteModal')

<!---// end modals  //--->


@endsection
@push('scripts')
<script type="text/javascript">
  $(document).ready(function(){

    // ------ global var -------- //

    var article_id;

    // --- end of global var ---//
    
    $(document).on('click','.articleDelete',function(e){ // event articleDelete Modal
      article_id = $(this).attr('id');
      jQuery.noConflict();
      $('#articleDeleteModal').modal('show');
    })

    $(document).on('click','.confirmArticleDelete',function(e){ // event confirm delete
      $.ajaxSetup({ // set token for post,put,patch response
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      })
      $.ajax({ // ajax request for article delete
        url: '/admin/article/'+article_id,
        method: 'POST',
        beforeSend:function(){
          $('#ok_button').text('Deleting...');
        },
        success:function(){
          setTimeout(function(){
             $('#confirmModal').modal('hide');
             window.location.href = "/admin/article";
            }, 2000);
        }
      })
    })
    
    $('#userData').DataTable({ // article table
      processing: true,
        serverSide: true,
        ajax: 'http://laravelproject.com/admin/article/postdata',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'author', name: 'author'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
          ]
      });
    });

</script>
@endpush