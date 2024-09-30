<?php

namespace App\Twig;

use App\Twig\Functions\GravatarFunctions;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('gravatar', [GravatarFunctions::class, 'getGravatar']),
        ];
    }

    public function getGlobals(): array
    {
        return [
            'format' => \DateTimeInterface::FORMAT,
        ];
    }
}
