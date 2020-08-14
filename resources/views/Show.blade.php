@include('BaseModel')



<div class="row justify-content-center mt-3">
<h1> Detalhes do orçamento </h1>
</div>


<div class="row justify-content-center mt-3">

<ul>
    <li class="form form-group"> ID do orçamento: {{$Sale_Record->Id}}  </li>
    <li class="form form-group">Nome do cliente :{{$Sale_Record->Client}} </li>
    <li class="form form-group">Nome do Vendedor :{{$Sale_Record->Seller}} </li>
    <li class="form form-group">Descrição do orçamento:{{$Sale_Record->Description}} </li>
    <li class="form form-group">Valor:{{$Sale_Record->Value}} </li>
    <li class="form form-group">Data:{{$Sale_Record->Data}} </li>

</ul>
</div>
<div class="row justify-content-center mt-3">


<form action="{{route ('delete', $Sale_Record->Id)}}" method="POST">
@csrf
@method('Delete')

<button type="submit" class="btn btn-danger" > Deletar </button>
<a class="btn btn-primary"href="{{route ('home')}}"> Voltar </a>
</div>


</form>




