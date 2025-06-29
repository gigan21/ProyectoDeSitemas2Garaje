@extends('layouts.app')

@section('title', 'Registrar Salida')
@section('page-title', 'Salida de Vehículos Ocasionales')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('salidas.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="entrada_id">Vehículo</label>
                        <select name="entrada_id" id="entrada_id" class="form-control" required>
                            <option value="">Seleccione un vehículo</option>
                            @foreach($entradas as $entrada)
                                @if(!$entrada->salida)
                                    <option value="{{ $entrada->id }}">
                                        {{ $entrada->vehiculo->placa }} - Entrada: {{ $entrada->fecha_entrada->format('H:i') }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="total_pagado">Total a Pagar (BS)</label>
                        <input type="number" step="0.01" name="total_pagado" id="total_pagado" class="form-control" required>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Registrar Salida Vehiculos Ocasionales </button>
                    <a href="{{ route('salidas.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection