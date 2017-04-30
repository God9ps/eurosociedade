@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @for($i=0;$i<count($lottery);$i++)

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>{{ $lottery[$i]['title'] }}</b>
                            <span class="badge pull-right">
                                {{ $lottery[$i]['lottery']['number'] }}
                          </span>
                        </div>
                        <div class="panel-body">
                            @if($lottery[$i]['id'] == 0)
                                @for($x=0;$x<count($lottery[$i]['lottery']['key']);$x++)
                                    <span class="center-block"><b>{{ $x+1 }}º prémio : </b>{{ $lottery[$i]['lottery']['key'][$x] }}</span>
                                @endfor
                            @endif
                            <b class="pull-right">{{ $lottery[$i]['date'] }}</b>
                        </div>
                        <div class="panel-footer" style="display: flex; flex-direction: row-reverse">

                            <a href="{{ route('editar', ['lottery' => $lottery[$i]['id']]) }}"
                               class="btn btn-sm btn-warning">
                                Ver detalhe
                            </a>
                        </div>
                    </div>
                </div>

            @endfor

        </div>
    </div>
@endsection