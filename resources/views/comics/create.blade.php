@extends('layouts.app')

@section('mainContent')

    <main class="container">

        <div>

            <h1>Crea nuovo Comic</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf

                <div>
                    <label for="title">Titolo:</label>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                <div>
                    <label for="description">Descrizione:</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="img">Immagine:</label>
                    <input type="text" id="img" name="img" placeholder="Inserisci URL immagine">
                </div>
                <div>
                    <label for="price">Prezzo:</label>
                    <input type="text" id="price" name="price" placeholder="Inserisci il prezzo">
                </div>
                <div>
                    <label for="series">Serie:</label>
                    <input type="text" id="series" name="series" placeholder="Inserisci la serie">
                </div>
                <div>
                    <label for="date">Data:</label>
                    <input type="text" id="date" name="date" placeholder="Inserisci la data di uscita">
                </div>
                <div>
                    <label for="type">Tipo:</label>
                    <select name="type" id="type">
                        <option value="comic_book">Comic Book</option>
                        <option value="graphic_novel">Graphic Novel</option>
                    </select>
                </div>

                <button type="submit">
                    Crea Comic
                </button>

            </form>

        </div>

    </main>
    
@endsection