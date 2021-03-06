@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/p" enctype="multipart/form-data" method="post">
  @csrf

    <div class="row">
      <div class="col-8 offset-2">

          <div class="row">
            <h1>Add New Post</h1>
          </div>

          <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post caption</label>

              <input id="caption"
                    type="text"
                    name="caption"
                    class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                    value="{{ old('caption') }}"
                    autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif

          </div>

          <div class="row">
           <label for="image" class="col-md-4 col-form-label">Post image</label>
            <input type="file" name="image" class="form-control-file" id="image">

          @if ($errors->has('image'))
                      <strong>{{ $errors->first('image') }}</strong>
            @endif
          </div>

          <div class="row pt-4">
            <button class="btn btn-primary">Add new post</button>
          </div>

      </div>
    </div>
  </form>
</div>
@endsection

