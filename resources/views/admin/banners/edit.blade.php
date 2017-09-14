@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Banners - Editando Banner</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('banners.update', $banner->id) }}" method="post" role="form"  class="form-vertical">
                        {!! method_field('PUT') !!}
                        {!! csrf_field() !!} 
                        @include('admin.banners.partials.form') 
                        <div class="form-group"> 
                            <button class="btn btn-warning form-control">
                                    Editar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection