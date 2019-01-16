<?php

namespace App\Models;

class Delivery extends BaseModel
{
    protected $fillable = [
        'id',
        'client_id',
        'origin',
        'destiny',
        'delivery_date'
    ];

    protected $table = 'deliveries';

    /**
     * @return array[] Validation rules
     */
    public function rules()
    {
        return [
            'id' => 'integer',
            'client_id' => 'required|integer',
            'origin' => 'required|string',
            'destiny' => 'required|string',
            'delivery_date' => 'required|date',
        ];
    }
}
