@extends('layouts.app')
@section('content')


<div class="col-md-8">
    <div class="card">
        <div class="card-header">Clientii</div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>client</th>
                        <th>codFiscal</th>
                        <th>oras</th>
                        <th>strada</th>
                        <th>numar</th>
                        <th>codPostal</th>
                        <th>persoanaContact</th>
                        <th>numarTelefon</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->client}}</td>
                        <td>{{$client->codFiscal}}</td>
                        <td>{{$client->oras}}</td>
                        <td>{{$client->strada}}</td>
                        <td>{{$client->numar}}</td>
                        <td>{{$client->codPostal}}</td>
                        <td>{{$client->persoanaContact}}</td>
                        <td>{{$client->numarTelefon}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection