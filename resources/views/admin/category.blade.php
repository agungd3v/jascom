@extends('admin.include.app')
@section('title', 'Category')
@section('components-active', 'mm-active')
@section('components-expanded', 'aria-expanded="true"')
@section('components-collapse', 'mm-collapse mm-show')
@section('category-active', 'mm-active')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-capitalize d-flex justify-content-between align-items-center">
        <span>Avaliable Category</span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-category">Add Category</button>
      </div>
      <div class="card-body">
        @foreach ($categories as $item)
        <a href="#" class="badge badge-info">{{ $item->category_name }}</a>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
<div class="modal fade add-category" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('category.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="input-group input-group-sm">
            <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
            <input type="text" name="category" class="form-control shadow-none">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Category</button>
        </div>
      </form>
    </div>
  </div>
</div>