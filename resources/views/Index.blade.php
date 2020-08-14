    @include('BaseModel')




<div class="row justify-content-center mt-3">

    <h1>Orçamentos Cadastrados</h1>




    <table class="table table-striped table-hover  col-10" >
        <thead class="">
          <tr>
            <th >Id</th>
            <th>Cliente</th>
            <th>Vendedor</td>
            <th>Descricao</th>
            <th>Valor</th>
            <th>Data</th>
            <th colspan="2">Detalhar</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($Sale_Records as $Sale_Record)
<tr>
    <td>{{$Sale_Record->Id}} </td>
    <td>{{$Sale_Record->Client}} </td>
    <td>{{$Sale_Record->Seller}} </td>
    <td>{{$Sale_Record->Description}} </td>
    <td>{{$Sale_Record->Value}} </td>
    <td>{{$Sale_Record->Data}} </td>



  <td class="pl-5"  >



    <a class="btn btn-primary" href=" {{route('show',$Sale_Record->Id)}} ">  Detalhar  </a>   <a class="btn btn-primary" class="ml-5"  href="{{route('edit',$Sale_Record->Id)}}"  >  Editar </a> </td>
@endforeach
        </tbody>


      </table>


</div>


    <div class="row justify-content-center">
        {{ $Sale_Records->links() }}


    </div>
    <div class="row justify-content-center">
        <a class=" btn btn-primary"  href="{{route('create')}}"  >  Cadastrar novo orçamento </a></td>
</div>


<div class="row justify-content-center mt-5">

    <h5>Informe o vendedor , cliente ou a data para pesquisa </h5>
</div>

<div class="row justify-content-center mt-5">

   <form class="form form-inline" action="{{route ('search')}}" method="post" class="form form-inline">
    @csrf
<input type="text" name="filter" placeholder="Filtrar" class="form-control">

<button type="submit" class="btn btn-primary">Procurar</button>
</div>

</form>
</html>
