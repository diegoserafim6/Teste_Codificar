@include('BaseModel')

<div class="row justify-content-center mt-3">
<h1> Editar o produto {{"$DadosVenda->id"}}</h1>
</div>

    <div class="row justify-content-center mt-3">
        <form class="col-12 col-md-3"  action="{{route ('update',$DadosVenda->id )}}" method="post">
            @method('put')
            @csrf




            <div class="form-group">
              <label > Cliente </label>
              <input type="text" class="form-control"  placeholder="Cliente" name="cliente"   value="{{$DadosVenda->cliente}}">
            </div>

            <div class="form-group">
                <label > Vendedor </label>
                <input type="text" class="form-control"  placeholder="Vendedor" name="vendedor"  value="{{$DadosVenda->vendedor}}">
              </div>
            <div class="form-group">
                <label > Descrição </label>
                <input type="text" class="form-control"  placeholder="Descrição" name="descricao"  value="{{$DadosVenda->descricao}}">
              </div>

            <div class="form-group">
                <label > Valor </label>
                <input type="Integer" class="form-control"  placeholder="Valor" name="valor" value="{{$DadosVenda->valor}}" >
              </div>

              <div class="form-group">
                <label > Data </label>
                <input type="Integer" class="form-control"  placeholder="Data" name="data" value="{{$DadosVenda->data}}" >
              </div>




            </fieldset>
<div class="row align-items-baseline d-fixed " >
              <button type="submit" class="btn btn-primary mr-2"> Atualizar </button>
                <a class="btn btn-primary mr-2" href="{{ route('home') }}" >Voltar</a>




            </form>



            <form action="{{route ('delete', $DadosVenda->id)}}" method="POST">
                @csrf
                @method('Delete')

                <button type="submit" class="btn btn-danger" > Deletar </button>

                </div>


                </form>










    </div>



