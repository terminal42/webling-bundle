<?php

namespace Terminal42\WeblingBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * A compiler pass to override the entity factory
 */
class EntityFactoryPass implements CompilerPassInterface
{
    /**
     * @var string
     */
    private $className;

    /**
     * Constructor.
     *
     * @param string $className
     */
    public function __construct($className)
    {
        $this->className = $className;
    }

    /**
     * Set the custom class as the Webling entity factory.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $container
            ->getDefinition('terminal42_webling.entity_factory')
            ->setClass($this->className)
        ;
    }
}
