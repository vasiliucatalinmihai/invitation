<?php

namespace App\Nova\Metrics;

use App\Models\Invitation;
use Illuminate\Support\Collection;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class Vegan extends Value
{
    public function name()
    {
        return 'Vegans';
    }

    public function calculate(NovaRequest $request)
    {
        /** @var Collection $accepted */
        $accepted = Invitation::where(['accepted' => true]);

        return $this->result($accepted->where('vegan' ,'=', true)->sum('guests'));
    }

    public function uriKey()
    {
        return 'invitation-totals-vegan';
    }
}
