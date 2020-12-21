@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    {{-- {{ __('Login') }} --}}
                   <h3> Iniciar sesión</h3>
                  
                </div>

                <div class="card-body text-center">
                    <form method="POST" action="{{ route('medidor.login') }}">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="medidor" class="col-md-4  col-4 col-form-label text-md-right">
                               
                                Cliente:
                            </label> --}}

                            <div class="col-md-8 col offset-md-2">
                                {{-- <input id="titular" type="number" class="form-control @error('titular') is-invalid @enderror" name="titular" value="{{ old('titular') }}"  autocomplete="titular" autofocus> --}}
                                <div class="input-group form-group">
                                
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input id="titular" type="number" placeholder="Cliente" class="form-control @error('titular') is-invalid @enderror" name="titular" value="{{ old('titular') }}"  autocomplete="titular" autofocus required>
                                    {{-- <input id="titular" type="number" placeholder="Cliente" class="form-control @error('titular') is-invalid @enderror" name="titular" value="{{ old('titular') }}"   autocomplete="titular" autofocus required> --}}
                                    @error('titular')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                               
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            {{-- <label for="dni" class="col-md-4 col-4 col-form-label text-md-right">
                              
                               Suministro:
                            </label> --}}

                            <div class="col-md-8 col offset-md-2 ">
                                <div class="input-group form-group">
                                
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                    </div>
                                    <input id="suministro" type="number" placeholder="Suministro" class="form-control @error('suministro') is-invalid @enderror" name="suministro" value="{{ old('suministro') }}"   autocomplete="current-suministro" required>
                                    {{-- <input id="suministro" type="number" placeholder="Suministro" class="form-control @error('suministro') is-invalid @enderror" name="suministro" value="{{ old('suministro') }}"   autocomplete="current-suministro" required> --}}
                                    @error('suministro')
                                    <span class="invalid-feedback" role="alert">
                                        <strong> {{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                {{-- <input id="suministro" type="number" class="form-control @error('suministro') is-invalid @enderror" name="suministro" value="{{ old('suministro') }}"   autocomplete="current-suministro"> --}}
                               
                               
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
                            <div class="col-md-8 offset-md-2">
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
