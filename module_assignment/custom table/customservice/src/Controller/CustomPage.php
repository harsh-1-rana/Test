<?php

namespace Drupal\customservice\Controller;
use Drupal\Core\Database\Database;


use Drupal\Core\Controller\ControllerBase;

class CustomPage extends ControllerBase {

        public function fetchData($id) {
                
                $result = \Drupal::database()->select('Heading', 'H')
                ->fields('H', array('fid', 'title', 'description'))
                ->condition('id',$id)
                ->execute()->fetchAllAssoc('id');

                $fid= $result[""]->fid;

                
                $connection = \Drupal::database();
                $query = $connection->select('Cards', 'C');
                $query->condition('C.fid',$fid);
                $query->fields('C', ['title', 'body', 'link','image']);
                $cards = $query->execute()->fetchAll();
                
                // dd($result);

                return [
                        '#theme' => 'returndata',
                        '#cards' => $cards,
                        '#headers' => $result,
                        
                        
                      ];   

}
}