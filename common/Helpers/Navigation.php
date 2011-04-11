<?php
class Helpers_Navigation extends Wisdom_Helper{
	public function navigation(){
		$request = Wisdom_Utils::factory('Wisdom_Request');
		$cont = $request->controller;
		$translator = Wisdom_Utils::factory()->get('Wisdom_Services')->Translator($request->lang);
		$this->partial('navigation', array('items'=>array($translator->$cont)));
	}
}