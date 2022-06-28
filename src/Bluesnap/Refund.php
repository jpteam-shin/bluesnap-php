<?php

namespace Bluesnap;

/**
 * Class Refund
 */
class Refund
{
    // public static function update($id, $query_params = null)
    // {
    //     return Adapter::update('Refund', $id, null, [
    //         'id_in_url' => false,
    //         'query_params' => $query_params
    //     ]);
    // }

    public static function create($id, $data)
    {
        return Adapter::create('Refund', $data, [
            'id_in_url' => true,
            'id' => $id
        ]);
    }
}
