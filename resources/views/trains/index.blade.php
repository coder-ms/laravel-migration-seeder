@extends('layouts.app')

@section('content')
   <h1>Treni</h1>  
   <div class="containerx">
    @forelse ($trains as $key=>$train)
    <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <p>{{$train->Azienda}}</p>
            <p>CODICE: {{$train->Codice_Treno}}</p>
            <p>PARTENZA: {{$train->Stazione_di_Partenza}}</p>
            <p>ORARIO: {{$train->Orario_di_Partenza}}</p>
            <p>CARROZZE: {{$train->Numero_Carrozze}}</p>
          </div>
          <div class="flip-card-back">
            <p>ARRIVO: {{$train->Stazione_di_Arrivo}}</p>
            <p>ORARIO: {{$train->Orario_di_Arrivo}}</p>
            <p>RITARDO: {{$train->In_orario}}</p>
            <p>CANCELLATO: {{$train->Cancellato}}</p>
          </div>
        </div>
    </div>
    @empty
        <div>NO TRAIN</div>
    @endforelse
</div>
@endsection




