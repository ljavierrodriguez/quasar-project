@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Banners</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Texto</th>
                            <th>Icono Boton 1</th>
                            <th>Texto Boton 1</th>
                            <th>Style Boton 1</th>
                            <th>Icono Boton 2</th>
                            <th>Texto Boton 2</th>
                            <th>Style Boton 2</th>
                            <th colspan="2" width="10%">Acciones</th>
                        </tr>
                        @foreach($banners as $banner)
                            <tr>
                                <th>{{ $banner->id }}</th>
                                <th>{{ $banner->texto }}</th>
                                <th>{{ $banner->icono_boton_1 }}</th>
                                <th>{{ $banner->texto_boton_1 }}</th>
                                <th>{{ $banner->style_boton_1 }}</th>
                                <th>{{ $banner->icono_boton_2 }}</th>
                                <th>{{ $banner->texto_boton_2 }}</th>
                                <th>{{ $banner->style_boton_2 }}</th>
                                <th><a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a></th>
                                <th>
                                    <a href="javascript:void();" onclick="event.preventDefault();document.getElementById('delete-banner-form').submit();" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                    <form id="delete-banner-form" action="{{ route('banners.destroy', $banner->id) }}" method="post">
                                        {!! method_field('DELETE') !!}
                                        {!! csrf_field() !!}                                    
                                    </form>                               
                                </th>
                            </tr>
                        @endforeach
                    </table>


                </div>
                <div class="panel panel-footer text-center">
                    {{ $banners->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
