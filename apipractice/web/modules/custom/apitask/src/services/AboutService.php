<?php

namespace Drupal\apitask\services;

class AboutService implements NewInterface
{
    public function get($uid)
    {
        $profiletype = 'students';
        $userid = $uid;
        $currentuser = \Drupal\user\Entity\User::load($userid);
        $currentprofile = \Drupal::entityTypeManager()
            ->getStorage('profile')
            ->loadByUser($currentuser, $profiletype);
        $paraid = $currentprofile->get('field_about')->entity->id->value;
        $address = $currentprofile
            ->get('field_about')
            ->entity->get('field_address')->value;
        $bio = $currentprofile->get('field_about')->entity->get('field_bio')
            ->value;
        $dob = $currentprofile->get('field_about')->entity->get('field_dob')
            ->value;
        $taxo = $currentprofile
            ->get('field_about')
            ->entity->get('field_testing')->entity->name->value;

        $data = [
            'Paraid' => $paraid,
            'address' => $address,
            'bio' => $bio,
            'dob' => $dob,
            'taxo' => $taxo,
        ];
        return $data;
    }

    public function create($data)
    {
    }

    public function update($uid, $data)
    {
    }

    public function delete($uid)
    {
    }
}
