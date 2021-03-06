@extends('admin.king')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            The email address is existed
        </div>
    @endif

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <h2 class="panel-heading">Create TV Station</h2>

                <div class="panel-body">

                    <form action="/admin/tvStation/create_user" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="form-label" name="name">Name</label>
                            <div class="controls">
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="username">Username</label>
                            <div class="controls">
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="email">E-Mail Address</label>
                            <div class="controls">
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="channel_id">Gender</label>
                            <select class="full-width" name="gender" required>
                                <option value="1">Male</option>
                                <option value="0">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="password">tmp Password</label>
                            <div class="controls">
                                <input type="text" name="password" id="password" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="st_name">Category</label>
                            <div class="controls">

                                <select name="channel_cat_id" class="form-control">
                                    @foreach($category as $cat)

                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" name="st_percent">Channel Name</label>
                            <div class="controls">
                                <input type="text" name="chanelName" id="chanelName" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" name="st_percent">Channel Number</label>
                            <div class="controls">
                                <input type="text" name="chanelNum" id="chanelNum" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-12 m-b-50 text-center">
                            <button type="submit" class="btn btn-lg btn-success"> Add new TV Station </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@stop
