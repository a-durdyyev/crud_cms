@extends('layouts.app')
@section('content')


<div class="col-md-8">
    <div class="card">
        <div class="card-header">Adauga Cursa</div>

        <div class="card-body">

            <form action="{{route('courses.store')}}" method="post" enctype="multipart/form-data">


                @csrf
                <label for="cursa">Cursa</label>
                <input type="text" name="cursa" class="form-control">
                <br>
                <label for="cursa">Selecteaza Client</label>
                <select name="clientID" class="form-control">
                    @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->client}}</option>
                    @endforeach
                </select>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="plecareData">Plecare data</label>
                        <input type="datetime-local" name="plecareData" class="form-control">
                        <br>
                        <label for="plecareLocatie">Plecare locatie</label>
                        <input type="text" name="plecareLocatie" class="form-control">
                    </div>
                    <div class="col-sm-3">
                        <label for="sosireData">Sosire data</label>
                        <input type="datetime-local" name="sosireData" class="form-control">
                        <br>
                        <label for="sosireLocatie">Sosire locatie</label>
                        <input type="text" name="sosireLocatie" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="intoarcereData">Intoarcere data</label>
                        <input type="datetime-local" name="intoarcereData" class="form-control">
                        <br>
                        <label for="intoarcereLocatie">Intoarcere locatie</label>
                        <input type="text" name="intoarcereLocatie" class="form-control">
                        <br>
                    </div>
                    <div class="col-sm-3">
                        <label for="europaletiIncarcat">europaletiIncarcat</label>
                        <input type="number" name="europaletiIncarcat" class="form-control">
                        <br>
                        <label for="europaletiDescarcat">Intoarcere locatie</label>
                        <input type="number" name="europaletiDescarcat" class="form-control">
                        <br>
                    </div>
                </div>
                <label for="pret">Pret</label>
                <input type="number" step="0.01" name="pret" class="form-control">
                <br>
                <label for="kilometriParcurs">kilometriParcurs</label>
                <input type="number" step="0.01" name="kilometriParcurs" class="form-control">
                <br>
                <label for="notes">Notes</label>
                <textarea name="notes" class="form-control" cols="30" rows="10"></textarea>
                <br>

                <input type="submit" value="Adauga tura" class="btn btn-success">
            </form>
        </div>
    </div>
</div>



@endsection