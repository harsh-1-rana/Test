<?php

namespace Drupal\apitask\services;

class DocService implements NewInterface
{
    public function get($uid)
    {
        $profiletype = 'students';
        $userid = $uid;
        $currentuser = \Drupal\user\Entity\User::load($userid);
        $currentprofile = \Drupal::entityTypeManager()
            ->getStorage('profile')
            ->loadByUser($currentuser, $profiletype);
        $paraid = $currentprofile->get('field_documents')->entity->id->value;
        $documents = [];
        $docs = $currentprofile->get('field_documents');
        foreach ($docs as $items) {
            $doc = $items->entity;
            $doctype = $doc->get('field_doc_type')->value;
            $yearofexp = $doc->get('field_year_of_expiry')->value;
            $file = $doc->get('field_file')->entity->getFileUri();

            $data = [
                'doctype' => $doctype,
                'yearofexp' => $yearofexp,
                'file' => $file,
                'paraid' => $paraid,
            ];
            array_push($documents, $data);
        }
        return $documents;
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
