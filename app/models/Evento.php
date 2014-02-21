<?php

class Evento extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'titulo' => 'required',
		'descripcion' => 'required',
		'inicio' => 'required',
		'fin' => 'required',
		'precio' => 'required'
	);
}
