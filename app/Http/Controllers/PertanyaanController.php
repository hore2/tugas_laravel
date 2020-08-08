<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use datetime;
class PertanyaanController extends Controller

{
	public function create(){
    	return view('post.create');
    }
    public function store(Request $request){
    	//dd('$store');
    $request->validate([
   		'judul'=>'required|Unique:pertanyaan2',
   		'isi'=>'required'
   		]);
    	$query = DB::table('pertanyaan2')->insert(
				    [
				    "judul"=>$request["judul"],
				    "isi"=>$request["isi"],
				    "tgl_buat"=> new \DateTime()/*,
				    'tgl_pembaharui'=> Carbon::now()*/
    				]);
    	return redirect('/pertanyaan')->with('success','Data berhasil di input');
    }
    public function index(){
    	$post = DB::table('pertanyaan2')->get();
    	//select * from pertanyaan 
		//dd($post);
    	return view('post.index',compact('post'));
    }

    public function show($id){
    	$data =DB::table('pertanyaan2')->where('id',$id)->first();
    	//dd($data);
     	return view('post.show',compact('data'));
    }
   public function destroy($id){
   	$query =DB::table('pertanyaan2')->where('id',$id)->delete();
   	return redirect('/pertanyaan')->with('success','Delete  berhasil di input');
    
   }
   public function edit($id){
   	$data =DB::table('pertanyaan2')->where('id',$id)->first();
    	//dd($data);
     	return view('post.edit',compact('data'));
   }
   public function update($id, Request $request){
   	$request->validate([
   		'judul'=>'required|Unique:pertanyaan2',
   		'isi'=>'required'
   	]);
   	$query=DB::table('pertanyaan2')
   					->where('id',$id)
   					->update([
   						'judul'=>$request['judul'],
   						'isi'=>$request['isi'], 
   						'updated_at'=> Carbon::now()

   					]);
   		return redirect('/pertanyaan')->with('success','  berhasil di Update');
   }
   function jumlah(Request $request){
    $c = DB::select("SELECT count(id) as total FROM pertanyaan2");
    /*if($c > 0 ): a ? b;*/
}
}
