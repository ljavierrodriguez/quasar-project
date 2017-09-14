@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Banners - Creando Banner</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('banners.create') }}" method="post" role="form"  class="form-vertical">
                        {!! method_field('POST') !!}
                        {!! csrf_field() !!} 
                        @include('admin.banners.partials.form') 
                        <div class="form-group"> 
                            <button class="btn btn-primary form-control">
                                    Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection