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
                    @include('inc.messages')
                <form role="form" action="{{ route('tag.store') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="form-group">
                                    <label for="name">Tag Title</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Tag Title">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Tag Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Tag Slug">
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