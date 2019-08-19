<?php


namespace App\Transformers;


use League\Fractal\TransformerAbstract;

class CategoryTransformers extends TransformerAbstract
{
    public function transform($data)
    {
        return [
            'id' => $data->id,
            'name' => $data->name,
            'created_at' => $data->created_at
        ];
    }
}
