@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
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