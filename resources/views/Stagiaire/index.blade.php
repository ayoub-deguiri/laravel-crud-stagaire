@extends('Layout.layout')
@section('content')
    <div class="p-3 ">
        @if (session()->has('success'))
            <div class="alert alert-success d-flex justify-content-center ">
                <p>
                    {{ session()->get('success') }}
                </p>
            </div>
        @endif
        <table class="table table-bordered table-striped  rounded  text-center">
            <tr class="bg-info text-white ">
                <th>photo </th>
                <th>Id </th>
                <th>nom </th>
                <th>prenom </th>
                <th>genre </th>
                <th>date_naissance </th>
                <th>note </th>
                <th colspan="3">Operations</th>
            </tr>
            @forelse($stagiaires as $stagiaire)
                <tr>
                    @if (!empty($stagiaire->photo))
                        <td><img style="height:40px" class="rounded-circle"
                                src='http://127.0.0.1:8000/photoStagiaire/{{ $stagiaire->photo }}'></td>
                    @else
                        <td><img style="height:40px" class="rounded-circle" src={{ asset('photoStagiaire/default.png') }}>
                        </td>
                    @endif
                    <td>{{ $stagiaire->id }}</td>
                    <td>{{ $stagiaire->nom }}</td>
                    <td>{{ $stagiaire->prenom }}</td>
                    <td>{{ $stagiaire->genre }}</td>
                    <td>{{ $stagiaire->date_naissance }}</td>
                    <td>{{ $stagiaire->note }}</td>
                    <td><a href={{ route('stagiaires.show', ['stagiaire' => $stagiaire->id]) }}>Consulter</a> </td>
                    <td><a href={{ route('stagiaires.edit', ['stagiaire' => $stagiaire->id]) }}>Edit</a></td>
                    <td>
                        <form action={{ route('stagiaires.destroy', ['stagiaire' => $stagiaire->id]) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Confirmez vous la suppression de ce stagiaire ?')"> Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Aucune données trouvée</td>
                </tr>
            @endforelse
        </table>
        {{-- <div class="d-flex align-items-center justify-content-center p-2">{{ $stagiaires->links() }}</div> --}}

    </div>
@endsection
