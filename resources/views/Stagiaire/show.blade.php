@extends('Layout.layout')
@section('content')
    <div class="container p-2">
        <table>
            <table class="table table-bordered mt-3 table-bordered text-center">
                <thead class=" bg-info text-white">
                    <tr>
                        <th>Photo</th>
                        <th>#id</th>
                        <th>Nom</th>
                        <th>prenom</th>
                        <th>genre</th>
                        <th>date_naissance</th>
                        <th>note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @if (!empty($stagiaire->photo))
                            <td><img style="height:40px" class="rounded-circle" src='http://127.0.0.1:8000/photoStagiaire/{{ $stagiaire->photo }}'>
                            </td>
                        @else
                            <td><img style="height:40px" class="rounded-circle" src={{ asset('photoStagiaire/default.png') }}></td>
                        @endif
                        <td>{{ $stagiaire->id }}</td>
                        <td>{{ $stagiaire->nom }}</td>
                        <td>{{ $stagiaire->prenom }}</td>
                        <td>{{ $stagiaire->genre }}</td>
                        <td>{{ $stagiaire->date_naissance }}</td>
                        <td>{{ $stagiaire->note }}</td>
                    </tr>
                </tbody>
            </table>
        </table>
    </div>
@endsection
