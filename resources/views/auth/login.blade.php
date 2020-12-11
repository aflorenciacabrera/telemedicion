@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    {{-- {{ __('Login') }} --}}
                    Iniciar sesión
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('medidor.login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="medidor" class="col-md-4 col-form-label text-md-right">
                                {{-- {{ __('E-Mail Address') }} --}}
                                Nº Medidor
                            </label>

                            <div class="col-md-6">
                                <input id="medidor" type="text" class="form-control @error('medidor') is-invalid @enderror" name="medidor" value="{{ old('medidor') }}" required autocomplete="medidor" autofocus>

                                @error('medidor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">
                                {{-- {{ __('dni') }} --}}
                                DNI del Titular
                            </label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}"  required autocomplete="current-dni">

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{-- {{ __('Login') }} --}}
                                    Consultar
                                </button>

                                {{-- @if (Route::has('dni.request'))
                                    <a class="btn btn-link" href="{{ route('dni.request') }}">
                                        {{ __('Forgot Your dni?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
