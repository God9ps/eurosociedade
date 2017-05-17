
@extends('layouts.app')

@section('content')

<div class="container">
    <h2>As minhas sociedades</h2>
    <div class="row">

        @foreach($societies as $society)
              <div class="col-md-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <b>{{ $society->type->nome }}</b>
                          <span class="badge pull-right">
                              {{ $society->type->nome }}
                          </span>
                      </div>
                      <div class="panel-body">
                          {{ $society->admin->name }}
                      </div>
                      <div class="panel-footer" style="display: flex; flex-direction: row-reverse">
                          <a href="{{ route('editar', ['society' => $society]) }}"
                             class="btn btn-sm btn-warning">
                              Ver detalhe
                          </a>
                      </div>
                  </div>
              </div>

        @endforeach
    </div>
    <div class="row">
        <hr>
        <div class="text-center">{{ $societies->links() }}</div>
    </div>
</div>
@endsection

@section('scripts')
    <script>

    </script>
@endsection