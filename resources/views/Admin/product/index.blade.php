@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List Product</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{route('product.create')}}" class="btn btn-primary">Add New</a>
        @include('layouts/flash')
        <table id="table-bordered" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center"># </th>
              <th class="text-center">Nama</th>
              <th class="text-center">Harga</th>
              <th class="text-center">Category</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($product as $index => $d)
              <tr class="text-center">
                <td>
                  {{$index + 1}}
                </td>
                <td>
                  {{$d->name}}
                </td>
                <td>
                  {{$d->harga}}
                </td>
                <td>
                  {{$d->id_category}}
                </td>
                <td>
                  <a href="{{route('product.edit',$d->id)}}" class="btn btn-success">Edit</a>

                  {!! Form::open(['url' => 'admin/product/'.$d->id,'class' => 'delete','style' => 'display:inline-table']) !!}

                  {!! Form::hidden ('_method','DELETE')!!}

                  {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}

                  {!! Form::close() !!}
                </td>
              </tr>
            @empty
                
            @endforelse
          
          </tbody>
      </div>
    </div>
  </div>
</div>  
@endsection