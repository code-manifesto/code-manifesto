<?php

use CodeManifesto\Mapping\Mapping;

class SupporterController extends BaseController {

	public function newSupporter()
	{
        $rules = array(
            'first_name'       => 'required',
            'last_name'      => 'required',
            'email'      => 'required|email'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('/support')
                    ->withErrors($validator)
                    ->withInput(Input::all());
        } else {

            $supporter = new Supporter;
            $supporter->first_name     = Input::get('first_name');
            $supporter->last_name      = Input::get('last_name');
            $supporter->twitter_user          = Input::get('twitter_user');
            $supporter->github_user          = Input::get('github_user');
            $supporter->email          = Input::get('email');
            $supporter->city          = Input::get('city');
            $supporter->state          = Input::get('state');
            $supporter->country          = Input::get('country');
            $supporter->save();

            $data = [
                'id' => $supporter->id,
                'city' => $supporter->city,
                'state' => $supporter->state,
                'country' => $supporter->country
            ];

            Queue::push('CodeManifesto\Mapping\Mapping', $data);

            return Redirect::to('/thankYou');
        }

	}

    public function support()
    {
        return View::make('support');
    }
    public function thankYou()
    {
        return View::make('thank_you')->with(array('supporters'=> Supporter::all()));
    }

}
