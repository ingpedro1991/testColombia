@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Conversion de Divisas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form>
                        <div class="row">
                            <div class="col">
                                <label for="Monto" class="form-label">Monto</label>
                                <input id="Monto" type="text" class="form-control" placeholder="xxx.xx" aria-label="Monto" required>
                            </div>
                            <div class="col">
                                <label for="De" class="form-label">De</label>
                                <input id="De" type="text" class="form-control" placeholder="USD" aria-label="De" required>
                            </div>
                            <div class="col">
                                <label for="A" class="form-label">A</label>
                                <input id="A" type="text" class="form-control" placeholder="EUR" aria-label="A" required>
                            </div>
                            <div class="col">
                                <label for="Resultado" class="form-label">Resultado</label>
                                <input id="Resultado" type="text" class="form-control" placeholder="Resultado" aria-label="Resultado" value="" disabled>
                            </div>
                        </div>
                        <button type="submit" id="btn_submit" class="btn btn-success mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
