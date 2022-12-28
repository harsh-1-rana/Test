<?php

namespace Drupal\apitask\services;

class EducationService implements NewInterface
{
    public function get($uid)
    {
        $profiletype = 'students';
        $userid = $uid;
        $currentuser = \Drupal\user\Entity\User::load($userid);
        $currentprofile = \Drupal::entityTypeManager()
            ->getStorage('profile')
            ->loadByUser($currentuser, $profiletype);
        $paraid = $currentprofile->get('field_education')->entity->id->value;
        $education = [];
        $edu = $currentprofile->get('field_education');
        foreach ($edu as $items) {
            $educ = $items->entity;
            $college = $educ->get('field_college')->value;
            $degree = $educ->get('field_degree')->value;
            $year = $educ->get('field_year_of_passing')->value;
            $document = $educ->get('field_documents')->entity->getFileUri();

            $data = [
                'college' => $college,
                'degree' => $degree,
                'year' => $year,
                'document' => $document,
                'paraid' => $paraid
            ];
            array_push($education, $data);
        }
        return $education;
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
