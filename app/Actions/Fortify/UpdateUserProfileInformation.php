<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'username'     => ['required', 'string', 'max:255'],
            'email'        => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'first_name'   => ['required', 'string', 'max:255'],
            'last_name'    => ['required', 'string', 'max:255'],
            'address'      => ['required', 'string', 'max:80'],
            'province'     => ['required', 'string', 'max:255'],
            'city'         => ['required', 'string', 'max:255'],
            'postal_code'  => ['required', 'numeric', 'digits:5', 'regex:/^[0-9]{5}$/'],
            'phone_number' => ['required', 'numeric', Rule::unique('users')->ignore($user->id)]
            // 'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        // if (isset($input['photo'])) {
        //     $user->updateProfilePhoto($input['photo']);
        // }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'username'     => $input['username'],
                'email'        => $input['email'],
                'first_name'   => $input['first_name'],
                'last_name'    => $input['last_name'],
                'address'      => $input['address'],
                'province'     => $input['province'],
                'city'         => $input['city'],
                'postal_code'  => $input['postal_code'],
                'phone_number' => $input['phone_number'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'username'          => $input['username'],
            'email'             => $input['email'],
            'first_name'        => $input['first_name'],
            'last_name'         => $input['last_name'],
            'address'           => $input['address'],
            'province'          => $input['province'],
            'city'              => $input['city'],
            'postal_code'       => $input['postal_code'],
            'phone_number'      => $input['phone_number'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
