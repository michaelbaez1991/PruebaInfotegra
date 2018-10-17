@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Consulta del tiempo</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form class="form-inline">
                            {{-- CIUDAD --}}
                            <label class="my-1 mr-2" for="ciudad">Ciudad</label>
                            <select class="custom-select my-1 mr-sm-2" id="ciudad">
                                <option selected disabled>...</option>
                                <option value="Bogota">Bogotá</option>
                                <option value="medellin">Medellin</option>
                                <option value="Cali">Cali</option>
                                <option value="Miami">Miami</option>
                            </select>
                        </form>
                    
                        <hr>
                        <div class="panel-body">
                            <table class="table table-dark text-center table-bordered" id="resumen">
                            </table>
                        </div>
                        
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="form-group">
                                <label for="endpoind">Endpoint (Default)</label>
                                <input type="text" class="form-control" id="endpoind" value="http://api.openweathermap.org/data/2.5" readonly>
                            </div>
                            <div class="form-group">
                                <label for="appid">Appid (Default)</label>
                                <input type="text" class="form-control" id="appid" value="86723fd6d8b585f6ec7ab1a329dc6622" readonly>
                            </div>
                            <div class="form-group">
                                <label for="units">Units (Default)</label>
                                <input type="text" class="form-control" id="units" value="metric" readonly>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
