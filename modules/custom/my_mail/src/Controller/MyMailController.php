<?php
/**
* Contains \Drupal\my_mail\Controller\MyMailController.
*/

namespace Drupal\my_mail\Controller;

class MyMailController{
  /**
  * Send a mail when node published
  */
  public function sendMail()
  {
    return array(
      '#title' => 'Hello World !',
      '#markup'=> 'Mail send successfully'
      );
  }
}
