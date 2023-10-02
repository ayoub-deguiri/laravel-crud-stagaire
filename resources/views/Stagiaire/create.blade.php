@extends('Layout.layout')
@section('content')
    <div class="p-3 ">
        <h5 class="text-center">Page Stagiaires </h5>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- @if ($errors->any())
            @php
                dd($errors);
            @endphp
        @endif --}}
        <div class="row">

            <div class="col-6">
                <form method="POST" action={{ route('stagiaires.store') }} enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nom">Nom du Stagiaire : </label>
                        <input type="text" name="nom" class="form-control" id="nom" aria-describedby="nomHelp"
                            placeholder="Enter nom">
                    </div>
                    @error('nom')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="prenom">Prenom du Stagiaire : </label>
                        <input type="text" name="prenom" class="form-control" id="prenom"
                            aria-describedby="prenomHelp" placeholder="Enter prenom">
                    </div>
                    @error('prenom')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label>Genre du Stagiaire : </label> <br />
                        <div class="pl-5">
                            F : <input type="radio" name="genre" value="M" id="genreF"
                                aria-describedby="genreHelp" placeholder="Enter genre">
                            M : <input type="radio" name="genre" value="F" id="genreM"
                                aria-describedby="genreHelp" placeholder="Enter genre">
                        </div>
                    </div>
                    @error('genre')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="dateNaissance">date Naissance</label>
                        <input type="date" name="date_naissance" class="form-control" id="dateNaissance"
                            aria-describedby="dateHelp">
                    </div>
                    @error('date_naissance')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="note">Note : </label>
                        <input type="text" name="note" class="form-control" id="note" aria-describedby="noteHelp"
                            placeholder="Enter note">
                    </div>
                    @error('note')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="photo">Photo : </label><br />
                        <input type="file" id="photo" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
@endsection
