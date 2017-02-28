<?php namespace LibreriaControl\Http\Controllers;

class ProveedorController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('proveedor.index');
		//return 'Pagina de inicio validado';
	}
	public function getAgregar(){
		return view('proveedor.agregar');
	}

	public function getListar(){
		return null;
	}

}
