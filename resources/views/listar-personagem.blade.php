@foreach ($personagens as $heroi)
    <h1>Nome do personagem: {{$heroi['nome']}}</h1>
    <h1>Poder do personagem: {{$heroi['poder']}}</h1>
@endforeach

{{$personagem -> links()}}