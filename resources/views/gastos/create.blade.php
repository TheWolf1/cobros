@extends('layout')

@section('title_page')
    Nuevo Gasto
@endsection


@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body container">
                    <form action="" >
                        <div class="form-group">
                            <label for="cantidadId">Cantidad</label>
                            <input type="text" class="form-control" id="cantidadId" name="cantidad" placeholder="Ejemplo: 2.50">
                        </div>
                        <div class="form-group">
                            <label for="cantidadId">Descripcion</label>
                            <textarea class="form-control" name="descripcion" id="descripcionId" cols="30" rows="10" placeholder="Ejemplo: Gasto en gasolina"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="Registar Gasto">
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection