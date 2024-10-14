<?php

namespace App\Controller;

use Selene\CMSBundle\Controller\ResetPasswordController as RPC;

class ResetPasswordController extends RPC
{
    protected $fromEmail = 'mailbot@selenesoftware.us';

    protected $fromName = 'Selene Mail Bot';
}
