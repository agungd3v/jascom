@extends('admin.include.app')
@section('title', 'Service')
@section('components-active', 'mm-active')
@section('components-expanded', 'aria-expanded="true"')
@section('components-collapse', 'mm-collapse mm-show')
@section('service-active', 'mm-active')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header text-capitalize d-flex justify-content-between align-items-center">
        <span>Avaliable Service</span>
        <div class="">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".add-service">Add Service</button>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".add-item">Add Service Item</button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Items Name</th>
              <th scope="col">Services Name</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $item->item_name }}</td>
              <td>{{ $item->service->service_name }}</td>
            <td class="font-weight-bold {{ $item->is_active == 1 ? 'text-success' : 'text-danger' }}">{{ $item->is_active == 1 ? 'enabled' : 'disabled' }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        @foreach ($services as $item)
        <a href="#" class="badge badge-info rounded-0">{{ $item->service_name }}</a>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
<div class="modal fade add-service" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('service.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="input-group input-group-sm">
            <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
            <input type="text" name="service" class="form-control shadow-none">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Service</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade add-item" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Item of service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('item.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend"><span class="input-group-text">Name</span></div>
            <input type="text" name="item" class="form-control shadow-none">
          </div>
          <select name="service_id" class="custom-select">
            <option value="" selected hidden>Item for...</option>
            @foreach ($services as $item)
            <option value="{{ $item->id }}">{{ $item->service_name }}</option>
            @endforeach
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Item save</button>
        </div>
      </form>
    </div>
  </div>
</div>