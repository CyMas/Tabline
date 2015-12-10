<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Contact;

use App;
use DB;
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

	public function welcome()
	{
		return view('welcome');
	}
	
	public function contact()
	{
		return view('contact');
	}

	public function contactsave(Request $request)
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $request->input('nama');
		$email = $request->input('email');
		$no_hp = $request->input('no_hp');
		$pesan = $request->input('pesan');

		DB::insert('insert into contact (id, nama, email, no_hp, pesan) values(?,?,?,?,?)',
			['',$nama, $email, $no_hp, $pesan]);
		return redirect('/welcome');
	}

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

	public function membersetoran()
	{
		return view('tabline.member.setoran');
	}

	public function membersetoransave()
	{
		$post = new Setoran;
		$post->username = \Input::get('username');
		$post->nama_nasabah = \Input::get('nama_nasabah');
		$post->no_rek = \Input::get('no_rek');
		$post->jenis_rek = \Input::get('jenis_rek');
		$post->jumlah_pengeluaran = \Input::get('jumlah_pengeluaran');

		$post->save();
		return redirect(url('/tabline/member/history/setoran'));
	}

	public function memberhistorypermintaan()
	{
		$data = array('data'=>Permintaan::all());
		return view('tabline.member.historypermintaan')->with($data);
	}
	
	

}
