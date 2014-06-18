<?php

Class GenericModel extends Eloquent{
	
	protected $rules = [];
	protected $fillable = [];
	private $errors;
	public $coba;

	public static $messages = [
			'required'    => 'The :attribute must be filled',
	        'email'    => 'This is not a valid email address',
	        'mimes' => 'The format of Profile Picture is invalid',
	        'min'      => 'The :attribute must be :value long or more',
	        'between' => 'The :attribute must be between :min - :max.',
	        'exists' => 'This :attribute does not exist'
	];

	public function isValid($input){
		$validator = Validator::make($input,$this->rules,GenericModel::$messages);
        if($validator->fails()){
            $this->errors = $validator->messages();
            return false;
        }
        else{
            return true;
        }
	}

	public function isValidUpdate($input){
		$rules = [];
		foreach ($this->rules as $key=>$value) {
			$split = explode('|', $value);
			$merged = [];
			foreach ($split as $item) {
				if (strpos($item, 'unique') === false) {
					$merged[] = $item;
				}
			}
			$rules[$key] = implode('|', $merged);
		}
		$validator = Validator::make($input,$rules,GenericModel::$messages);
        if($validator->fails()){
            $this->errors = $validator->messages();
            $this->coba = $rules;
            return false;
        }
        else{
            return true;
        }	
	}
	public function getError(){
		return $this->errors;
	}
}