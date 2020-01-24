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
            <h1 class="m-0 text-dark">Create Article</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('article') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('articleCreate') }}">Articles</a></li>
              <li class="breadcrumb-item active">Create Articles</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          {{-- start content here --}}
            <div class="col-lg-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Article Create Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="articleCreateFormId" method="post" action="{{ route('articleStore') }}">
                @csrf

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Title</label>
                    <input type="text" class="form-control" id="articleTitleId" name="title" placeholder="Article title">
                  </div> 
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="articleDescriptionId" rows="3" name="description" placeholder="Article Description"></textarea>
                  </div> 
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Author</label>
                    <input type="text" class="form-control" id="articleAuthorId" name="author" placeholder="Article Author">
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
            </div>

          {{-- end of content --}}
        </div>
      <!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content -->
  </div>
@endsection