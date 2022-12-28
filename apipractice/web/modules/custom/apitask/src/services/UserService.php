<?php
namespace Drupal\apitask\services;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\Core\Entity\EntityTypeManager;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
class UserService implements NewInterface
{
    public function get($uid)
    {
        $userid = $uid;
        $currentuser = \Drupal\user\Entity\User::load($userid);
        $name = $currentuser->name->value;
        $pass = $currentuser->pass->value;
        $mail = $currentuser->mail->value;
        $data = [
            'name' => $name,
            'pass' => $pass,
            'mail' => $mail,
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
