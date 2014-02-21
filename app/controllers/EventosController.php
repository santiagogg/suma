<?php

class EventosController extends BaseController {

	/**
	 * Evento Repository
	 *
	 * @var Evento
	 */
	protected $evento;

	public function __construct(Evento $evento)
	{
		$this->evento = $evento;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$eventos = $this->evento->all();

		return View::make('eventos.index', compact('eventos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('eventos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Evento::$rules);

		if ($validation->passes())
		{
			$this->evento->create($input);

			return Redirect::route('eventos.index');
		}

		return Redirect::route('eventos.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$evento = $this->evento->findOrFail($id);

		return View::make('eventos.show', compact('evento'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$evento = $this->evento->find($id);

		if (is_null($evento))
		{
			return Redirect::route('eventos.index');
		}

		return View::make('eventos.edit', compact('evento'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Evento::$rules);

		if ($validation->passes())
		{
			$evento = $this->evento->find($id);
			$evento->update($input);

			return Redirect::route('eventos.show', $id);
		}

		return Redirect::route('eventos.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->evento->find($id)->delete();

		return Redirect::route('eventos.index');
	}

}
