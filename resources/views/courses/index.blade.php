@extends('layouts.app')
@section('content')


<div class="col-md-8">
    <div class="card">
        <div class="card-header">Toate Curse</div>

        <div class="card-body">


            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Curs</th>
                        <th>ClientID</th>
                        <th>PlecareData</th>
                        <th>plecareLocatie</th>
                        <th>sosireData</th>
                        <th>sosireLocatie</th>
                        <th>intoarcereData</th>
                        <th>intoarcereLocatie</th>
                        <th>europaletiIncarcat</th>
                        <th>europaletiDescarcat</th>
                        <th>pret</th>
                        <th>kilometriParcurs</th>
                        <th>notes</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($courses as $course)
                    <tr>
                        <td>{{$course->cursa}}</td>
                        <td>{{$course->clientID}}</td>
                        <td>{{$course->plecareData}}</td>
                        <td>{{$course->plecareLocatie}}</td>
                        <td>{{$course->sosireData}}</td>
                        <td>{{$course->sosireLocatie}}</td>
                        <td>{{$course->intoarcereData}}</td>
                        <td>{{$course->intoarcereLocatie}}</td>
                        <td>{{$course->europaletiIncarcat}}</td>
                        <td>{{$course->europaletiDescarcat}}</td>
                        <td>{{$course->pret}}</td>
                        <td>{{$course->kilometriParcurs}}</td>
                        <td>{{$course->notes}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection