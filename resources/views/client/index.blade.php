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
          <table class="table  table-hover">
            <thead>
              <tr>
                <th>Cliente</th>
                <th>Prestado</th>
                <th>Abonado</th>
                <th>Saldo</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Kevin Paz</td>
                <td>$240</td>
                <td>$100</td>
                <td>140</td>
                <td>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditClienteModal"><i class="fa fa-pen"></i></button>
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

  <!-- modal editar cliente -->
  <div class="modal fade" id="EditClienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="abonoA">Nombre: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: Juan Carlos">
            </div>
            <div class="form-group">
                <label for="abonoA">Monto Prestado: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: 250">
            </div>
            <div class="form-group">
                <label for="abonoA">Abono total: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: 100">
            </div>
           
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="bntFormEditClient">Editar Cliente</button>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('scripts')
    <script>
        
    </script>
@endsection