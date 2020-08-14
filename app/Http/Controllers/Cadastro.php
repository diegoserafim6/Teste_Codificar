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
        $Sale_Record = DB::table('Records')->paginate(5);
        return view ('index', [
        'Sale_Records' => $Sale_Record]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Sale_Record = DB::table('Records');
        return view("Createview" , compact('Sale_Record'));
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
        $NovoCadastro->Id = $request->Id;
        $NovoCadastro->Client = $request->Client;
        $NovoCadastro->Seller = $request->Seller;
        $NovoCadastro->Description = $request->Description;
        $NovoCadastro->Value = $request->Value;
        $NovoCadastro->Data = $request->Data;
        $NovoCadastro->save();

return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {

         $Sale_Record = DB::table('Records')-> Where ('Id',$Id)->First();
        return view ('Show',[
            'Sale_Record' => $Sale_Record,
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        $Sale_Record = DB::table('Records')-> Where ('Id',$Id)->First();
        return view ('Edit',[
            'Sale_Record' => $Sale_Record,
        ] );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {

        $affected = DB::table('Records')->where('Id', '=', $Id )->update([
            'Client' => $request->Client,
            'Seller' => $request->Seller,
            'Description' => $request->Description,
            'Value' => $request->Value,
            'Data' => $request->Data,
        ]);
        return redirect()->route('home');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        $Sale_Record = DB::table('Records')-> Where ('Id',$Id)->delete();
        return redirect()->route('home');
    }


/*     This function will filter the results typed by the user and save in the variable query */

    public function Filter($filter=null){
        $results = $this->where(function($query) use ($filter){
            if($filter){
                $query->where('cliente','LIKE',"%{$filter}%" or 'vendedor','LIKE',"%{$filter}%" or 'data','LIKE',"%{$filter}%")->orderBy("%{$filter}%", 'desc')->get()   ;
            }
        });
         return $results;
            }

/*             This function will display the filtered results  */


    public function Search(Request $request){
    $Sale_Record = ($request->filter);
    $Sale_Record = DB::table('Records')->paginate(5);
    return view ('index', [
    'Sale_Records' => $Sale_Record]);

    }




}

