@include('BaseModel')

<div class="row justify-content-center mt-3">
<h1> Editar o produto {{"$Sale_Record->Id"}}</h1>
</div>

    <div class="row justify-content-center mt-3">
        <form class="col-12 col-md-3"  action="{{route ('update',$Sale_Record->Id )}}" method="post">
            @method('put')
            @csrf




            <div class="form-group">
              <label > Cliente </label>
              <input type="text" class="form-control"  placeholder="Cliente" name="Client"   value="{{$Sale_Record->Client}}">
            </div>

            <div class="form-group">
                <label > Vendedor </label>
                <input type="text" class="form-control"  placeholder="Vendedor" name="Seller"  value="{{$Sale_Record->Seller}}">
              </div>
            <div class="form-group">
                <label > Descrição </label>
                <input type="text" class="form-control"  placeholder="Descrição" name="Description"  value="{{$Sale_Record->Description}}">
              </div>

            <div class="form-group">
                <label > Valor </label>
                <input type="Integer" class="form-control"  placeholder="Valor" name="Value" value="{{$Sale_Record->Value}}" >
              </div>

              <div class="form-group">
                <label > Data </label>
                <input type="Integer" class="form-control"  placeholder="Data" name="Data" value="{{$Sale_Record->Data}}" >
              </div>




            </fieldset>
<div class="row align-items-baseline d-fixed " >
              <button type="submit" class="btn btn-primary mr-2"> Atualizar </button>
                <a class="btn btn-primary mr-2" href="{{ route('home') }}" >Voltar</a>




            </form>



            <form action="{{route ('delete', $Sale_Record->Id)}}" method="POST">
                @csrf
                @method('Delete')

                <button type="submit" class="btn btn-danger" > Deletar </button>

                </div>


                </form>










    </div>



