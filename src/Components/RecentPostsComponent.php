<?php

namespace App\Components;

use Doctrine\ORM\EntityManagerInterface;
use Selene\CMSBundle\Traits\BlogTrait;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('recentposts')]
class RecentPostsComponent
{
    use BlogTrait;

    public $doctrine;

    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    public function getBlogs(): array
    {
        return $this->getBlogList($this->doctrine, 4);
    }
}
