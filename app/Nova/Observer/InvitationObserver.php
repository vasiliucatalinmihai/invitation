<?php

namespace App\Nova\Observer;

use App\Models\Invitation;

class InvitationObserver
{

    public function creating(Invitation $invitation): void
    {
        $invitation->hash = hash('sha256', $invitation->fullname);
        $invitation->email = 'n/a';
    }

}
