<?php

namespace App\Models;

class Client extends BaseModel
{
    protected $fillable = [
        'id',
        'name',
    ];

    protected $table = 'clients';

    /**
     * @return array[] Validation rules
     */
    public function rules()
    {
        return [
            'id' => 'integer',
            'name' => 'required|string',
        ];
    }
}
