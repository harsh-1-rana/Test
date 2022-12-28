<?php

namespace Drupal\apitask\services;

class TestService implements NewInterface
{
    public function get($uid)
    {
        $profiletype = 'students';
        $userid = $uid;
        $currentuser = \Drupal\user\Entity\User::load($userid);
        $currentprofile = \Drupal::entityTypeManager()
            ->getStorage('profile')
            ->loadByUser($currentuser, $profiletype);
        $paraid = $currentprofile->get('field_exam')->entity->id->value;
        $tests = [];
        $exam = $currentprofile->get('field_exam');
        foreach ($exam as $items) {
            $name = $items->entity;
            $examname = $name->get('field_exam_name')->entity->name->value;
            $data = [
                'exam' => $examname,
                'paraid' => $paraid,
            ];
            array_push($tests, $data);
        }
        return $tests;
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