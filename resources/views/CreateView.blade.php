@include('BaseModel')




<div class="row justify-content-center mt-3">
    <h1>Cadastrar orçamento</h1>
</div>

<div class="row justify-content-center mt-3">
    <form class="col-12 col-md-3" action="{{route ('store')}}" method="post">
        @csrf
        <div class="form-group"><label> ID </label> <input type="text" class="form-control" name="id" placeholder="ID:" value="{{old('id')}}" required pattern="[0-9]+" /></div>
        <div class="form-group"><label> Cliente </label><input type="text" class="form-control" name="cliente" placeholder="Cliente:" value="{{old('cliente')}}" required pattern="[a-zA-Z]+" /></div>
        <div class="form-group"><label> Vendedor </label><input type="text" class="form-control" name="vendedor" placeholder="Vendedor:" value="{{old('vendedor')}}" required pattern="[a-zA-Z]+" /></div>
        <div class="form-group"><label> Descrição </label><input type="text" class="form-control" name="descricao" placeholder="Descrição:" value="{{old('descricao')}}" required pattern="[(?=.*\d)(?=.*[a-z])(?=.*[A-Z])]+" /></div>
        <div class="form-group"><label> Valor </label><input type="text" class="form-control" name="valor" placeholder="Valor:" value="{{old('valor')}}" required pattern="[0-9]+" /></div>
        <div class="form-group"><label> Data </label><input type="datetime-local" class="form-control" name="data" placeholder="Data:" value="{{old('data')}}" required /></div>
        <button class="btn btn-primary" type="submit">Enviar</button>
        <button class="btn btn-primary" type="reset">Limpar</button>
        <a class="btn btn-primary" href="{{route('home')}}"> Voltar </a>
    </form>
</div>
