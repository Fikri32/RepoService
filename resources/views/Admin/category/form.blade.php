@extends('layouts.master')


@section('content')

@php
    $formTitle = !empty($category) ? 'Update' : 'New'
@endphp

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>{{($formTitle)}} Category</h2>
        <ul class="nav navbar-right panel_toolbox">
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
       @include('layouts/flash')
       @if (!empty($category))
           {!! Form::model($category,['url' => ['admin/category',$category->id],'method' =>'PUT','class' => 'form-horizontal form-label-left']) !!}
           {!! Form::hidden('id') !!}
       @else
           {!! Form::open(['url' => 'admin/category','class' => 'form-horizontal form-label-left']) !!}
       @endif
           <div class="form-group">
            {!! Form::label('name','Name',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}

            <div class="col-md-5 col-sm-5 col-xs-12">
              {!! Form::text('name',null,['class' => 'form-control col-md-5 col-xs-10','placeholder' => 'Category Name']) !!}
             
            </div>
           
           </div>

           <div class="ln_solid"></div>
           <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
              <button type="submit" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
            </div>
          </div>
           {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>  
@endsection