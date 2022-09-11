@extends('layout')

@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div >
                        <table class="table">
                            <thead>
                                <th>Descripcion:</th>
                                <th>Cantidad:</th>
                                <th>Fecha:</th>
                                <th>Editar:</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gasto en gasolina</td>
                                    <td>3</td>
                                    <td>12/09/2022</td>
                                    <td>
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#gastoEditModal"><i class="fa fa-pen"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



     <!-- Modal editar GAsto -->
  <div class="modal fade" id="gastoEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="abonoA">Descripcion: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: Gasto en gasolina">
            </div>
            <div class="form-group">
                <label for="abonoA">cantidad: </label>
                <input type="text" class="form-control" placeholder="Ejemplo: 20">
            </div>
            <div class="form-group">
                <label for="abonoA">Fecha:  </label>
                <input type="date" class="form-control" placeholder="Ejemplo: 20/09/2022">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="bntFormAbono">Hacer Abono</button>
        </div>
      </div>
    </div>
  </div>
@endsection