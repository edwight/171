<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View('admin.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getEstadisticas()
	{
		return View('admin.estadisticas');

		/*
		$users = \DB::table('users')->get();
		foreach ($users as $user)
		{
		    var_dump($user->username);
		}
		*/
		//lista de municipio
		//$municipios = \DB::table('municipios')->where('id', 'idm')->pluck('capital');


		//lista de municipio y parroquias
		//$parroquias = \DB::table('parroquias')->where('id', 'idp')->andWhere('idm', '$idm')->get();
		
		//lista de organismo
		//$organismos = \DB::table('organismos')->select('id','name')->get();

		//lista de sucesos o hechos
		//$hechos = \DB::table('hecho')->->get();

		//lista de estadisticas
		//$estadisticas = \DB::table('estadisticas')->where('tipo', '$tipo')->get();

	
		//$municipios = \DB::table('municipios')->get();
		//foreach ($municipios as $municipio)
		//{
		   // var_dump($municipio->municipio);
		//}
		//return View('admin.estadisticas');

                            
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

}
