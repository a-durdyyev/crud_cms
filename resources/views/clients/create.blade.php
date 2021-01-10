@extends('layouts.app')
@section('content')


<div class="col-md-8">
    <div class="card">
        <div class="card-header">Adauga Client</div>

        <div class="card-body">


            <form action="{{route('clients.store')}}" method="post" enctype="multipart/form-data">


                @csrf

                <div class="row">

                    <div class="col-sm-5">
                        <label for="client">client</label>
                        <input type="text" name="client" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-5">
                        <label for="codFiscal">codFiscal</label>
                        <input type="number" name="codFiscal" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="oras">oras</label>
                        <input type="text" name="oras" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="strada">strada</label>
                        <input type="text" name="strada" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="numar">numar</label>
                        <input type="text" name="numar" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="nucodPostalmar">codPostal</label>
                        <input type="number" name="codPostal" class="form-control">
                        <br>
                    </div>
                </div>
                <label for="persoanaContact">persoanaContact</label>
                <input type="text" name="persoanaContact" class="form-control">
                <br>
                <label for="numarTelefon">numarTelefon</label>
                <input type="number" name="numarTelefon" class="form-control">
                <br>

                <input type="submit" value="Adauga client" class="btn btn-success">
            </form>
        </div>
    </div>
</div>



@endsection