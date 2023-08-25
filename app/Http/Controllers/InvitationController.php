<?php

namespace App\Http\Controllers;

use App\Http\Requests\InvitationSubmitRequest;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class InvitationController extends BaseController
{
    public function view(Request $request, string $hash)
    {
        if (!$hash) {
            return redirect()->route('home');
        }

        $invitation = Invitation::where(['hash' => $hash])->first();

        if (!$invitation || !$invitation->id) {
            return redirect()->route('home');
        }

        return view('invitation', ['invitation' => $invitation]);
    }

    public function submit(InvitationSubmitRequest $request, string $hash)
    {

        /** @var Invitation $invitation */
        $invitation = Invitation::where(['hash' => $hash])->first();

        if (!$invitation || !$invitation->id) {
            return redirect()->route('home');
        }

        $data = $request->validated();

        foreach ($data as $key => $value) {
            $invitation->{$key} = $value;
        }

        $invitation->save();


        return redirect()->route('invitation.view', ['hash' => $hash])->with('success', 'Profile updated!');
    }
}
