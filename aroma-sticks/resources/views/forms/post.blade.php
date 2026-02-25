@extends('form-template')

@section('content')
        <div class="form-container">
            <h1>Sumuoti skaičius</h1>
            <form method="POST" action="{{ route('count-sum') }}">
                <div class="form-group">
                    <label for="numberInput1">Pirmas skaičius:</label>
                    <input class="input-1" type="number" id="numberInput" name="numberInput1" placeholder="Įrašykite skaičių"
                        required>
                    <label for="numberInput2">Antras skaičius:</label>
                    <input type="number" id="numberInput" name="numberInput2" placeholder="Įrašykite skaičių" required>
                </div>
                @csrf
                <button type="submit">Pridėti</button>
            </form>
        </div>
@endsection

@section('title')
    Sumatorius - Forma
@endsection
