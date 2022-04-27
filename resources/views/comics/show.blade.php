@extends('layouts.app')

@section('mainContent')

    <main>

        <div>
            <h1>{{ $comic->title }}</h1>
            <p>{!! $comic->description !!}</p>
            <img src="{{ $comic->img }}" alt="">
            <p>{{ $comic->price }}</p>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->date }}</p>
            <p>{{ $comic->type }}</p>
        </div> 
        <div>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit">
                    Elimina
                </button>

            </form>
        </div>   
        
    </main>
    
@endsection