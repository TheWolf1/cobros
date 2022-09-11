@extends('layout')
@section('mainContent')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="monto">Monto a prestar:</label>
                            <input type="text" class="form-control" id="montoIdForm">
                        </div>
                        <div class="form-group">
                            <label for="interes">Interes:</label>
                            <select name="interes" id="interesIdForm" class="form-control">
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20" selected>20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dias">Dias:</label>
                            <select name="dias" id="diasIdForm" class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24" selected>24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column ">
                            <h1 class="d-flex justify-content-center">MONTO</h1>
                            <h3 class="d-flex justify-content-center" id="sumadorDeMonto"></h3>
                            <h4 id="cuotasContentId" class="d-flex justify-content-center"></h4>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        /* realizar  */
$("#montoIdForm").keyup((e)=>{
  let monto = e.target.value;
  let interes = $("#interesIdForm").val();
  let dias = $("#diasIdForm").val();
  sumarInteresTotal(monto, interes,'sumadorDeMonto',dias,'cuotasContentId');
  
});

$("#interesIdForm").change((e)=>{
  let interes = e.target.value
  let monto = $("#montoIdForm").val();
  let dias = $("#diasIdForm").val();
  sumarInteresTotal(monto, interes,'sumadorDeMonto',dias,'cuotasContentId');
  
});


$("#diasIdForm").change((e)=>{
  let interes = $("#interesIdForm").val();
  let monto = $("#montoIdForm").val();
  let dias = e.target.value;
  sumarInteresTotal(monto, interes,'sumadorDeMonto',dias,'cuotasContentId');
  
});
    </script>
@endsection