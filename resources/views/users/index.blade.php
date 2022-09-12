@extends('layout')

@section('title_page')
    Lista de usuarios
@endsection


@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Nombre:</th>
                            <th>Rol:</th>
                            <th>Usuario:</th>
                            <th>Caja:</th>
                            <th>Edit:</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kevin Paz</td>
                                <td>Cobrador</td>
                                <td>Ortizkevin</td>
                                <td>$1200</td>
                                <td>
                                    <button class="btn btn-success">
                                        <i class="fa fa-pen"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection