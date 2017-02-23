<?php namespace LibreriaControl\Http\Controllers;

class RolController extends Controller {

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
	public function getIndex(){
		return 'Pagina de inicio rol validado';
	}
	public function getCrearRol()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function postCrearRol()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function getActualizarRol()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function postActualizarRol()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function missingMethod($parameters = array()){
		abort(404);
	}
}
