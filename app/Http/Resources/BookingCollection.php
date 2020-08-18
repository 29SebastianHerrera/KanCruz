<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class BookingCollection extends ResourceCollection
{

    public function toArray($request)
    {
        return [
            "start" => $this->checkin,
            "end" => $this->chekout,
        ];
    }
}
