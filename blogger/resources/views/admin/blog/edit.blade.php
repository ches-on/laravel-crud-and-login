@extends('admin.main-layout')
@section('header')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
@endsection
@section('content-header')
    <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Post</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
      </div>
@endsection
@section('body')
<section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edits</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                   
                    
               
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('post.update', $post->id)}}">
                    @csrf
                    @method('post')
                    <div class="mb-3">
                        <label for="title" class="form-label">{{ __('Title') }}</label>
                        <input type="text" class="form-control" id="title" name="title" required value="{{$post->title}}">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">{{ __('Content') }}</label>
                        <textarea class="form-control" id="content" name="content" rows="10" required value="">{{ $post->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">{{ __('Author') }}</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{$post->author}}" required>
                    </div>

                    <button type="submit" class="btn btn-primary rounded">{{ __('Submit') }}</button>
                </form>   
            
            </div>
            {{-- <p style="height: 10px;">{{$posts->links()}}</p>  --}}
            <!-- /.card-body -->
            <div class="card-footer">
              Editing post
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
<script>
    CKEDITOR.replace('content');
</script>
@endsection





