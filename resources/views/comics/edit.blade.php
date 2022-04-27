@extends('layouts.app')

@section('mainContent')

    <main class="container">

        <div>

            <h1>Modifica Comic</h1>

            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')

                <div>
                    <label for="title">Titolo:</label>
                    <input type="text" id="title" name="title" required value="{{ $comic->title }}" placeholder="Inserisci il titolo">
                </div>
                <div>
                    <label for="description">Descrizione:</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>
                <div>
                    <label for="img">Immagine:</label>
                    <input type="text" id="img" name="img" required value="{{ $comic->img }}" placeholder="Inserisci URL immagine">
                </div>
                <div>
                    <label for="price">Prezzo:</label>
                    <input type="text" id="price" name="price" required value="{{ $comic->price }}" placeholder="Inserisci il prezzo">
                </div>
                <div>
                    <label for="series">Serie:</label>
                    <input type="text" id="series" name="series" required value="{{ $comic->series }}" placeholder="Inserisci la serie">
                </div>
                <div>
                    <label for="date">Data:</label>
                    <input type="text" id="date" name="date" required value="{{ $comic->date }}" placeholder="Inserisci la data di uscita">
                </div>
                <div>
                    <label for="type">Tipo:</label>
                    <select name="type" id="type" required>
                        <option value="comic_book" {{ $comic->type == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic_novel" {{ $comic->type == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>

                <button type="submit">
                    Modifica
                </button>

            </form>

        </div>

    </main>
    
@endsection