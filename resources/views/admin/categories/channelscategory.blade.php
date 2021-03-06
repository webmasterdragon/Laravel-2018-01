@extends('admin.king')

@section('content')

 <div class="col-md-10 col-md-offset-1">
<h2>Channel Category</h2>
         <div class="col-md-9 m-t-50">
            <table class="table table-striped table-flip-scroll cf">
                <thead class="table-header">
                <th>#</th>
                <th>Name</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach($categories as $channelCategory)
                    <tr>

                        <td>
                            {{ $channelCategory->id }}
                        </td>
                        <td>
                            {{ $channelCategory->name }}
                        </td>
                        <td>
                            <p>

                                {!! Form::open(array('route' => array('channelscategory.destroy', $channelCategory->id), 'method' => 'DELETE')) !!}
                                {!! Form::submit('DELETE', ['class' => 'btn btn-danger btn-block']) !!}
                                {!! Form::close() !!}

                            </p>
                        </td>

                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <div class="col-md-3 m-t-50 well">

                <form action="{{ route('channelscategory.store') }}" method="post">
                                    <div class="form-group">
                                        <label class="form-label" id="name" name="name">Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12 m-b-50">
                                        <button type ="submit" class="btn btn-lg btn-primary"> ADD NEW CATEGORY </button>
                                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                    </div>

                </form>
        </div>
</div>
@endsection