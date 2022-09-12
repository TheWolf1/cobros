@extends('layout')

@section('title_page')
Nuevo de usuario
    
@endsection
@section('mainContent')
<div class="row">
    <div class="col-12">
      <div class="card">

        <div class="container card-body table-responsive p-0" >
            
            <form action="">
                
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="user">Usuario:</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="interes">Rol:</label>
                    <select name="interes" id="interesIdForm" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Cobrador</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="interes">Caja:</label>
                    <select name="interes" id="interesIdForm" class="form-control">
                        <option value="1">Caja de kevin</option>
                        <option value="2">Caja principal</option>
                    </select>
                </div>
              
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block" value="Crear">
                </div>


            </form>
            
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

 

@endsection
@section('scripts')
    <script>

    </script>
@endsection