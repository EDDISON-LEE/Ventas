<?php

namespace sisVentas\Http\Requests;

use sisVentas\Http\Requests\Request;

class PersonaFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'nombre'=>'required|max:100',
			'tipo_documento'=>'required|max:20',
			'num_documento'=>'required|max:15',
			'direccion'=>'required|max:70',
			'telefono'=>'required|max:15',
			'email'=>'required|max:50'
			/** no se validamos aqui el tipo_persona por que es para usarlo internamente**/
        ];
    }
}
