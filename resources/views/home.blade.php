@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Da</th>
                    <th scope="col">A</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_di_partenza  }}</td>
                    <td>{{ $train->stazione_di_arrivo  }}</td>
                    <td>{{ $train->orario_di_partenza  }}</td>
                    <td>{{ $train->orario_di_arrivo  }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    @if ($train->cancellato === 1)
                    <td>Cancellato</td>
                    @elseif ($train->in_orario === 0)
                    <td>In Ritardo</td>
                    @else
                    <td>In Arrivo</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection