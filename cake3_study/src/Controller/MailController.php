<?php

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Mailer\MailerAwareTrait;

class MailController extends Controller
{
  use MailerAwareTrait;

  public function initialize()
  {
    parent::initialize();
  }

  public function index()
  {
    try {
      $this->getMailer('User')->send('welcome', [(object) [
        'email' => 'foo@example.co.jp',
        'name' => 't.watanabe'
      ]]);
    } catch (\Cake\Network\Exception\SocketException $e) {
      \Cake\Log\Log::error($e->getTraceAsString());
      throw $e;
    } catch (\Exception $e) {
      \Cake\Log\Log::error($e->getTraceAsString());
      throw $e;
    }

    return;
  }
}
