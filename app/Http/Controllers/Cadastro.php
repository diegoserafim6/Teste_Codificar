<?php

namespace App\Http\Controllers;

use App\Cadastro as AppCadastro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class cadastro extends Controller
{




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $DadosVenda = DB::table('cadastros')->paginate(5);
        return view ('index', [
        'DadosVendas' => $DadosVenda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $DadosVenda = DB::table('cadastros');

        return view("Createview" , compact('DadosVenda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request )
    {

        $NovoCadastro = new AppCadastro();
        $NovoCadastro->id = $request->id;
        $NovoCadastro->cliente = $request->cliente;
        $NovoCadastro->vendedor = $request->vendedor;
        $NovoCadastro->descricao = $request->descricao;
        $NovoCadastro->valor = $request->valor;
        $NovoCadastro->data = $request->data;

        $NovoCadastro->save();

return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


         $DadosVenda = DB::table('cadastros')-> Where ('id',$id)->First();
        return view ('Show',[
            'DadosVenda' => $DadosVenda,
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DadosVenda = DB::table('cadastros')-> Where ('id',$id)->First();
        return view ('Edit',[
            'DadosVenda' => $DadosVenda,
        ] );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


/*
        $DadosVenda = DB::table('cadastros')-> Where ('id',$id)->First();
        $DadosVenda->id = $request->id;
        $DadosVenda->cliente = $request->cliente;
        $DadosVenda->vendedor = $request->vendedor;
        $DadosVenda->descricao = $request->descricao;
        $DadosVenda->valor = $request->valor;
        $DadosVenda->data = $request->data;;

        $DadosVenda->save();

        dd($DadosVenda);


        $affected = DB::update("update cadastros set $DadosVenda->id = $request->cliente; where $DadosVenda->id = $id");
        dd($affected);
*/
        $affected = DB::table('cadastros')
        ->where('id', '=', $id )
        ->update([
            'cliente' => $request->cliente,
            'vendedor' => $request->vendedor,
            'descricao' => $request->descricao,
            'valor' => $request->valor,
            'data' => $request->data,


        ]);



        return redirect()->route('home');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DadosVenda = DB::table('cadastros')-> Where ('id',$id)->delete();
        return redirect()->route('home');
    }

    public function search(Request $request){

    $DadosVenda = ($request->filter);

    $DadosVenda = DB::table('cadastros')->paginate(5);
    return view ('index', [
    'DadosVendas' => $DadosVenda]);

    }




}

