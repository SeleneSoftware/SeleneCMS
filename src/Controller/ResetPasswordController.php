<?php

namespace App\Controller;

use Selene\CMSBundle\Controller\PasswordController;

class ResetPasswordController extends PasswordController
{
    protected $fromEmail = 'mailbot@selenesoftware.us';

    protected $fromName = 'Selene Mail Bot';
}
