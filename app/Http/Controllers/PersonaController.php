<?php namespace LibreriaControl\Http\Controllers;

class PersonaController extends Controller {

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
		return 'Pagina de inicio persona validado';
	}

	public function getCrearPersona()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function postCrearPersona()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function getActualizarPersona()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function postActualizarPersona()
	{
		//return view('home');
		return 'Pagina de inicio validado';
	}
	public function missingMethod($parameters = array()){
		abort(404);
	}

}
