@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Topic /
          @if($topic->id)
            Edit #{{ $topic->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($topic->id)
          <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $topic->title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="body-field">Body</label>
                	<textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $topic->body ) }}</textarea>
                </div> 
                <div class="form-group">
                    <label for="admin_user_id-field">Admin_user_id</label>
                    <input class="form-control" type="text" name="admin_user_id" id="admin_user_id-field" value="{{ old('admin_user_id', $topic->admin_user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $topic->category_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="last_edit_admin_user_id-field">Last_edit_admin_user_id</label>
                    <input class="form-control" type="text" name="last_edit_admin_user_id" id="last_edit_admin_user_id-field" value="{{ old('last_edit_admin_user_id', $topic->last_edit_admin_user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $topic->order ) }}" />
                </div> 
                <div class="form-group">
                	<label for="excerpt-field">Excerpt</label>
                	<textarea name="excerpt" id="excerpt-field" class="form-control" rows="3">{{ old('excerpt', $topic->excerpt ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="slug-field">Slug</label>
                	<input class="form-control" type="text" name="slug" id="slug-field" value="{{ old('slug', $topic->slug ) }}" />
                </div> 
                <div class="form-group">
                	<label for="img_id-field">Img_id</label>
                	<input class="form-control" type="text" name="img_id" id="img_id-field" value="{{ old('img_id', $topic->img_id ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('topics.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
