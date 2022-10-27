<?php
/**
 *
* @Send File to channel
 * Provide site admins with a list of all
 * RSVP signups
 */
namespace Drupal\newtask\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Database;
use Drupal\Core\Node\NodeInterface;
use Drupal\node\Entity\Node;
class NewTaskController extends ControllerBase {
    public function content(){
        $id = \Drupal::routeMatch()->getParameter('id');
        $entity_type = 'newtask_entity';
        $entity_id = $id;
        $view_mode = 'full';

        $entity = \Drupal::entityTypeManager()->getStorage($entity_type)->load($entity_id);
        $title = $entity->get('field_title')->value;
        $description = $entity->get('field_description')->value;
        $para = $entity->field_card->getValue();
        $card=[];

        foreach($para as $element){
            $p = \Drupal\paragraphs\Entity\Paragraph::load($element['target_id']);
            $name = $p->field_name->value;
            $designation = $p->field_designation->value;
            $bio = $p->field_bio->value;
            $image= $p->field_image->entity->getFileUri();
            $link= $p->field_link->uri;

            $obj= array(
                'name' => $name,
                'designation' => $designation,
                'bio' => $bio,
                'image' => $image,
                'link' => $link,
                  );
                 array_push($card,$obj);
        
        }
        return array(
            '#theme' => 'custom_newtask_entity',
            '#card' => $card,
            '#title' => $title,
            '#description' => $description,
        );
        
    }
}