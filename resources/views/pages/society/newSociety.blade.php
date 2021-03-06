
@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Criar nova sociedade</h2>
    <div class="row">
        <div class="col-md-12">
            <form action="/society/nova" method="post">
                {{ csrf_field() }}
                <input type="hidden" id="id_admin" name="id_admin" value="{{ Auth::id() }}">
                <div class="form-group">
                    <label for="id_tipo">Escolha o jogo : </label>
                    <select id="id_tipo" name="id_tipo">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Nome da Sociedade : </label>
                    <input type="text" id="name" name="name" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Criar sociedade">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection