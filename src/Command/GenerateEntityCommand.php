<?php

declare(strict_types=1);

namespace Terminal42\WeblingBundle\Command;

use Symfony\Component\Filesystem\Filesystem;
use Terminal42\WeblingApi\Command\GenerateEntityCommand as BaseCommand;
use Terminal42\WeblingApi\EntityManager;

class GenerateEntityCommand extends BaseCommand
{
    public function __construct(EntityManager $entityManager = null, Filesystem $filesystem = null)
    {
        $this->manager = $entityManager;

        if (null === $filesystem) {
            $filesystem = new Filesystem();
        }

        parent::__construct($filesystem);
    }

    protected function configure(): void
    {
        parent::configure();

        $this->setName('webling:generate');
    }
}
