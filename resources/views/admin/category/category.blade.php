@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Title</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                <form role="form" action="{{ route('category.store') }}" method="POST">
                            {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label for="name">Category Title</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Category Title">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Category Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Category Slug">
                                </div>
                            
                        <!-- /.box-body -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
@endsection