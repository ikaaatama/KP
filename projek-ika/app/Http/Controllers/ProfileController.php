<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the update profile page.
     *
     * @param  Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
{
    $request->user()->update(
        $request->all()
    );

    return redirect('/home')->with('sukses','Data berhasil diupdate');

}
}