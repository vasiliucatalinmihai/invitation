<?php

namespace App\Nova\Metrics;

use App\Models\Invitation;
use Illuminate\Support\Collection;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

class Accepted extends Value
{
    public function name()
    {
        return 'Accepted';
    }

    public function calculate(NovaRequest $request)
    {
        /** @var Collection $accepted */
        $accepted = Invitation::where(['accepted' => true]);
        return $this->result($accepted->count());
    }

    public function uriKey()
    {
        return 'invitation-totals-accepted';
    }
}
