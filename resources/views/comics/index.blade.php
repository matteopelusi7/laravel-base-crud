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
                        </tr>

                    @endforeach

                </tbody>

            </table>
                
        </div>
        
    </main>
    
@endsection