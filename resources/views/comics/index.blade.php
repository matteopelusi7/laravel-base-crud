@extends('layouts.app')

@section('mainContent')

    <main>

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
                        </tr>

                    @endforeach

                </tbody>

            </table>
                
        </div>
        
    </main>
    
@endsection