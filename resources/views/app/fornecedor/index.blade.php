<h3>Fornecedor</h3>

{{-- @if(count($fornecedor) > 0 && count($fornecedor) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedor) > 10)
    <h3>Existem várias fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- @dd($fornecedor) --}}

@isset($fornecedor)
    @forelse($fornecedor as $key => $value)
        Iteração atual: {{$loop->iteration}} <br>
        Fornecedor: {{$value['nome']}} <br>
        Status: {{$value['status']}} <br>
        CNPJ: {{$value['cnpj'] ?? 'N/A'}} <br>
        Telefone: ({{$value['ddd'] ?? ''}})  {{$value['telefone'] ?? ''}} <br>
        <br>
        @if($loop -> first)
            Primeiro
        @endif
        @if($loop -> last)
            Último
            <br>
            Total de registros: {{$loop -> count}}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse
    {{-- @foreach($fornecedor as $key => $value)
        Fornecedor: {{$value['nome']}} <br>
        Status: {{$value['status']}} <br>
        CNPJ: {{$value['cnpj'] ?? 'N/A'}} <br>
        Telefone: ({{$value['ddd'] ?? ''}})  {{$value['telefone'] ?? ''}} <br>
        <hr>
    @endforeach --}}
    {{-- @php
        $i = 0
    @endphp
    @while (isset($fornecedor[$i]))
        Fornecedor: {{$fornecedor[$i]['nome']}} <br>
        Status: {{$fornecedor[$i]['status']}} <br>
        CNPJ: {{$fornecedor[$i]['cnpj'] ?? 'N/A'}} <br>
        Telefone: ({{$fornecedor[$i]['ddd'] ?? ''}})  {{$fornecedor[0]['telefone'] ?? ''}} <br>
        <br>
        @php
            $i++
        @endphp
    @endwhile --}}
    {{-- @for ($i = 0; isset($fornecedor[$i]); $i++)
        Fornecedor: {{$fornecedor[$i]['nome']}} <br>
        Status: {{$fornecedor[$i]['status']}} <br>
        CNPJ: {{$fornecedor[$i]['cnpj'] ?? 'N/A'}} <br>
        Telefone: ({{$fornecedor[$i]['ddd'] ?? ''}})  {{$fornecedor[0]['telefone'] ?? ''}} <br>
        <br>
    @endfor --}}
@endisset

{{-- @isset($fornecedor)
    Fornecedor: {{$fornecedor[0]['nome']}} <br>
    Status: {{$fornecedor[0]['status']}} <br>
    CNPJ: {{$fornecedor[0]['cnpj'] ?? 'N/A'}} <br>
    Telefone: ({{$fornecedor[0]['ddd'] ?? ''}})  {{$fornecedor[0]['telefone'] ?? ''}} <br>
    @switch($fornecedor[0]['ddd'])
        @case('11')
            São Paulo - SP
            @break
        @case('32')
            Juiz de Fora - MG
            @break
        @case('85')
            Fortaleza - CE
            @break
        @default
            UF não identificado
    @endswitch
@endisset
<br> --}}


{{-- @if($fornecedor[0]['status'] == 'N')
    Fornecedor Inativo
@endif --}}

{{-- @unless($fornecedor[0]['status'] == 'S')
    Fornecedor Inativo
@endunless --}}