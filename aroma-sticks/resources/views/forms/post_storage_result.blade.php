@extends('form-template')

@section('content')

    <div class="storage-container">

        @if (count($numbers) === 0)
            <p>Skaičių nerasta!</p>
        @else
            <h3>Išsaugoti skaičiai:</h3>
            <p class="numbers-container">
                @foreach ($numbers as $number)
                    <span class="number">{{ $number }}</span>
                @endforeach
            </p>

            <br>

            <div class="wipe-container">
                <form method="POST" action="{{ route('clear-numbers') }}">
                    @csrf
                    <button type="submit">Ištrinti viską</button>
                </form>

                <br>
                <a href="{{ route('forma-titulinis') }}">Grįžti</a>
            </div>
        @endif

        @if (count($numbers) === 0)
            <br>
            <a class="back-link" href="{{ route('forma-titulinis') }}">Grįžti</a>
        @endif
    </div>






@endsection

@section('title', 'Skaičių sąrašas')
