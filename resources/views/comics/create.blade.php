@extends('layouts.app')

@section('mainContent')

    <main class="container">

        <div>

            <h1>Crea nuovo Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" class=" @error('title') is-invalid @enderror form-control" placeholder="Inserisci il titolo">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class=" @error('description') is-invalid @enderror form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="img" class="form-label">Immagine:</label>
                    <input type="text" id="img" name="img" value="{{ old('img') }}" class=" @error('img') is-invalid @enderror form-control" placeholder="Inserisci URL immagine">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" id="price" name="price" value="{{ old('price') }}" class=" @error('price') is-invalid @enderror form-control" placeholder="Inserisci il prezzo">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" id="series" name="series" value="{{ old('series') }}" class=" @error('series') is-invalid @enderror form-control" placeholder="Inserisci la serie">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date" class="form-label">Data:</label>
                    <input type="text" id="date" name="date" value="{{ old('date') }}" class=" @error('date') is-invalid @enderror form-control" placeholder="Inserisci la data di uscita">
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">Tipo:</label>
                    <select name="type" id="type">
                        <option value="">Selezione il tipo</option>
                        <option value="comic_book">Comic Book</option>
                        <option value="graphic_novel">Graphic Novel</option>
                    </select>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit">
                    Crea Comic
                </button>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </form>

        </div>

    </main>
    
@endsection