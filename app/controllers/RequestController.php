<?php
class RequestController extends \BaseController {
	public function store() {
		$data = Input::all();
		DB::table('requests')->insert(array('lat' => '19.49', 'long' => json_encode($data)));
	}
}
