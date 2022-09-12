@extends('layout')

@section('title_page')

Crear Caja
    
@endsection
@section('mainContent')
<div class="row">
    <div class="col-12">
      <div class="card">
       
        <div class="container card-body table-responsive p-0" >
            
            <form action="">
                
                <div class="form-group">
                    <label for="cedula">Nombre decaja:</label>
                    <input type="text"  name="cajaName" class="form-control" placeholder="Ejemplo: Caja de kevin">
                </div>
                <div class="form-group">
                    <label for="cantidadId">Cantidad:</label>
                    <input type="text" name="cantidad" class="form-control" placeholder="Ejemplo: 200">
                </div>
             
              
                <div class="form-group">
                    <input type="submit"  class="btn btn-success btn-block" value="Crear">
                </div>


            </form>
            
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

 

@endsection