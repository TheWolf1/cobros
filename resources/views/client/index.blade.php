@extends('layout')

@section('title_page')
Tabla de clientes
    
@endsection
@section('mainContent')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Fixed Header Table</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="min-height: 300px;">
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Prestado</th>
                <th>Abonado</th>
                <th>Saldo</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Kevin Paz</td>
                <td>$240</td>
                <td>$100</td>
                <td>140</td>
                <td>
                    <button class="btn btn-success"><i class="fa fa-pen"></i></button>
                </td>
              </tr>
            
          
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
@endsection