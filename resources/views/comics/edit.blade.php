@extends('layouts.app')

@section('mainContent')

    <main class="container">

        <div>

            <h1>Modifica Comic</h1>

            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" id="title" class=" @error('title') is-invalid @enderror form-control" name="title" value="{{ old('title') ? old('title') : $comic->title }}" placeholder="Inserisci il titolo">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Descrizione:</label>
                    <textarea name="description" id="description" class=" @error('description') is-invalid @enderror form-control" cols="30" rows="10">{{ old('description') ? old('description') : $comic->description }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="img" class="form-label">Immagine:</label>
                    <input type="text" id="img" name="img" class=" @error('img') is-invalid @enderror form-control" value="{{ old('img') ? old('img') : $comic->img }}" placeholder="Inserisci URL immagine">
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Prezzo:</label>
                    <input type="text" id="price" name="price" class=" @error('price') is-invalid @enderror form-control" value="{{ old('price') ? old('price') : $comic->price }}" placeholder="Inserisci il prezzo">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="series" class="form-label">Serie:</label>
                    <input type="text" id="series" class=" @error('series') is-invalid @enderror form-control" name="series" value="{{ old('series') ? old('series') : $comic->series }}" placeholder="Inserisci la serie">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date" class="form-label">Data:</label>
                    <input type="text" id="date" class=" @error('date') is-invalid @enderror form-control" name="date" value="{{ old('date') ? old('date') : $comic->date }}" placeholder="Inserisci la data di uscita">
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class="form-label">Tipo:</label>
                    @if( old('type') )
                        <select name="type" id="type">
                            <option value="">Seleziona il tipo</option>
                            <option value="comic_book" {{ old('type')  == 'comic_book' ? 'selected' : '' }}>Comic Book</option>
                            <option value="graphic_novel" {{ old('type')  == 'graphic_novel' ? 'selected' : '' }}>Graphic Novel</option>
                        </select>
                    @else
                    <select name="type" id="type">
                        <option value="">Seleziona il tipo</option>
                        <option value="comic_book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic_novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                    @endif
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit">
                    Modifica
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