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
                                <input id="Monto" type="text" class="form-control" placeholder="xxx.xx" aria-label="Monto" value="" data-cambio="" required>
                            </div>
                            <div class="col">
                                <label for="De" class="form-label">De</label>
                                <select class="form-select form-control" id="De" aria-label="De">
                                    @foreach ($prefixMon as $kde => $vde)
                                        <option value="{{ $vde }}">{{ $kde }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="A" class="form-label">A</label>
                                <select class="form-select form-control" id="A" aria-label="A">
                                    @foreach ($prefixMon as $ka => $va)
                                        <option value="{{ $va }}">{{ $ka }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="Resultado" class="form-label">Resultado</label>
                                <input id="Resultado" data-cambio="" type="text" class="form-control" placeholder="Resultado" aria-label="Resultado" value="" readonly>
                            </div>
                        </div>
                        <button id="convert" class="btn btn-success mt-3" disabled>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
