@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>List Category</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a href="{{route('category.create')}}" class="btn btn-primary">Add New</a>
        @include('layouts/flash')
        <table id="table-bordered" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="text-center"># </th>
              <th class="text-center">Nama</th>
              <th class="text-center">Slug</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($category as $index => $d)
            <tr class="text-center">
              <td>{{$index + 1}}</td>
              <td>{{$d->name}}</td>
              <td>{{$d->slug}}</td>
              <td>
                <a href="{{route('category.edit',$d->id)}}" class="btn btn-success">Edit</a>
                {!! Form::open(['url' => 'admin/category/'. $d->id,'class' => 'delete','style' => 'display:inline-table']) !!}
                {!! Form::hidden('_method','DELETE') !!}
                {!! Form::submit('delete',['class' => 'btn btn-danger'])!!}
                {!! Form::close()!!}
              </td>
            </tr>
            @empty
             <td colspan="5">
              <div class="alert alert-success alert-dismissible fade in text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Data Belum Tersedia</strong>
              </div>
             </td>
            @endforelse
          
          </tbody>
      </div>
    </div>
  </div>
</div>  
@endsection