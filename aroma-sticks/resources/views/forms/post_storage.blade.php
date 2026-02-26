@extends('form-template')

@section('content')
    <div class="form-container">
        <h1>Skaičių saugykla</h1>
        <form method="POST" action="{{ route('store-number') }}">
            <div class="form-group">
                <label for="numberInput1">Skaičiaus įvedimas:</label>
                <input style="margin: 0;" class="input-1" type="number" id="numberInput" name="numberInput1" placeholder="Įrašykite skaičių"
                    required>
            </div>
            @csrf
            <button type="submit">Saugoti</button>
        </form>
    </div>
@endsection

@section('title')
    Skaičių saugyklos forma
@endsection
