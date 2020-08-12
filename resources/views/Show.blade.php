@include('BaseModel')



<div class="row justify-content-center mt-3">
<h1> Detalhes do orçamento </h1>
</div>


<div class="row justify-content-center mt-3">

<ul>
    <li class="form form-group"> ID do orçamento: {{$DadosVenda->id}}  </li>
    <li class="form form-group">Nome do cliente :{{$DadosVenda->cliente}} </li>
    <li class="form form-group">Nome do Vendedor :{{$DadosVenda->vendedor}} </li>
    <li class="form form-group">Descrição do orçamento:{{$DadosVenda->descricao}} </li>
    <li class="form form-group">Valor:{{$DadosVenda->valor}} </li>
    <li class="form form-group">Data:{{$DadosVenda->data}} </li>

</ul>
</div>
<div class="row justify-content-center mt-3">


<form action="{{route ('delete', $DadosVenda->id)}}" method="POST">
@csrf
@method('Delete')

<button type="submit" class="btn btn-danger" > Deletar </button>
<a class="btn btn-primary"href="{{route ('home')}}"> Voltar </a>
</div>


</form>




