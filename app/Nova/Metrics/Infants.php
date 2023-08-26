<?php

namespace App\Nova\Metrics;

use App\Models\Invitation;
use Illuminate\Support\Collection;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class Infants extends Value
{
    public function name()
    {
        return 'Infants';
    }

    public function calculate(NovaRequest $request)
    {
        /** @var Collection $accepted */
        $accepted = Invitation::where(['accepted' => true]);

        return $this->result($accepted->sum('infants'));
    }

    public function uriKey()
    {
        return 'invitation-totals-infants';
    }
}
