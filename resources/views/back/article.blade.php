@extends('back.layout.master')

@section('title')
  Welcome
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
            <div class="card-header">
              <h3 class="card-title">Table Article</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <table id="userData" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
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
@endsection
@push('scripts')
<script type="text/javascript">
  $(function(){
    $('#userData').DataTable({
      processing: true,
        serverSide: true,
        ajax: 'http://laravelproject.com/admin/article/postdata',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
  });
</script>
@endpush