@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Registrarse') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="md-form md-outline ">
                            <input id="Nombre" type="text" class="form-control form-control-lg @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('email') }}" required autocomplete="nombre" >
                            <label for="Nombre">Nombre</label>
                                @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="md-form md-outline ">
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                            <label for="email">Correo</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="md-form md-outline ">
                            <input id="Celular" type="text" class="form-control form-control-lg @error('Celular') is-invalid @enderror" name="Celular" value="{{ old('Celular') }}" required autocomplete="celular" >
                            <label for="Celular">Celular</label>
                                @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="md-form md-outline ">
                            <input id="direccion" type="text" class="form-control form-control-lg @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" >
                            <label for="direccion">Dirección</label>
                                @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="md-form md-outline">
                            <input id="password" type="password" class="form-control form-control-lg validate @error('email') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" >
                            <label for="password">Contraseña</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
