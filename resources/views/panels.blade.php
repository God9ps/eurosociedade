@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach($lottery as $item)

                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <b>{{ $item->title }}</b>
                            <span class="badge pull-right">
                              {{ $item->lottery->number }}
                          </span>
                        </div>
                        <div class="panel-body">
                            {{ $item->lottery->number }}
                        </div>
                        <div class="panel-footer" style="display: flex; flex-direction: row-reverse">
                            {{--<a href="{{ route('editar', ['society' => $society]) }}"
                               class="btn btn-sm btn-warning">
                                Ver detalhe
                            </a>--}}
                        </div>
                    </div>
                </div>

            @endforeach




            <div class="col col-md-4">
                <b-panel type="panel-primary"
                         title="O meu titulo success"
                         footer="O meu rodapé success"
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque cupiditate enim eos et ex fuga impedit incidunt iste iure laboriosam minima nemo, officia optio quod sint temporibus vitae voluptates?
                </b-panel>
            </div>
            <div class="col col-md-4">
                <b-panel type="panel-danger"
                         title="O meu titulo danger"
                         footer="O meu rodapé danger"
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque cupiditate enim eos et ex fuga impedit incidunt iste iure laboriosam minima nemo, officia optio quod sint temporibus vitae voluptates?
                </b-panel>
            </div>
            <div class="col col-md-4">
                <b-panel type="panel-warning"
                         title="O meu titulo warning"
                         footer="O meu rodapé warning"
                >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cumque cupiditate enim eos et ex fuga impedit incidunt iste iure laboriosam minima nemo, officia optio quod sint temporibus vitae voluptates?
                </b-panel>
            </div>
        </div>
    </div>
@endsection