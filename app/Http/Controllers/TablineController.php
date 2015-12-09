<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use DB;
use App\User;
use App\Permintaan;
use App\Setoran;

use Illuminate\Http\Request;
use Tabline\Tabline;

class TablineController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	

	public function pemasukan()
	{
		return view('data.pemasukan');
	}
	public function memberpermintaan()
	{
		return view('tabline.member.permintaan');
	}

	public function memberpermintaansave()
	{
		$post = new Permintaan;
		$post->username = \Input::get('username');
		$post->nama_nasabah = \Input::get('nama_nasabah');
		$post->no_rek = \Input::get('no_rek');
		$post->jenis_rek = \Input::get('jenis_rek');
		$post->alamat = \Input::get('alamat');
		$post->jumlah_pemasukan = \Input::get('jumlah_pemasukan');

		$post->save();
		return redirect(url('/tabline/member/history/permintaan'));
	}
	public function memberhistorisetoran()
	{
		$data = array('data'=>Setoran::all());
		return view('tabline.member.historisetoran')->with($data);
	}
	

}
