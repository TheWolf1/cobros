@extends('layout')

@section('title_page')
    Rutas de cobro
@endsection

@section('mainContent')

<div class="row">
    <div class="col-lg-12">
      <div class="card card-primary card-outline">
        <div class="card-header">
            <h5 class="card-title">Clientes por cobrar</h5>
        </div>
        <div class="card-body">
          @include('../layouts/rute')
        </div>
      </div><!-- /.card -->
    </div>
  </div>
  <!-- /.row -->



@endsection