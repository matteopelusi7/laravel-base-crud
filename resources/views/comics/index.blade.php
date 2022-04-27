@extends('layouts.app')

@section('mainContent')

    <main class="container">

        <div>

            <table>

                <thead>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Immagine</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th>Link</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                </thead>

                <tbody>

                    @foreach ($comics as $comic)

                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->description }}</td>
                            <td>
                                <img src="{{ $comic->img }}" alt="">
                            </td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">Visualizza</a>
                            </td>
                            <td>
                                <a href="{{ route('comics.edit', $comic) }}">Modifica</a>
                            </td>
                            <td>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">
                                        Elimina
                                    </button>

                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>

            </table>
                
        </div>
        
    </main>
    
@endsection