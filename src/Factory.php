<?php

namespace Noldors\Forms;

use Symfony\Component\Templating\EngineInterface;

class Factory
{
    private $templateEngine;

    public function __construct(EngineInterface $templateEngine)
    {
        $this->templateEngine = $templateEngine;
    }

    public function create(string $type, iterable $data = null, iterable $options = null)
    {

    }

    protected function createFormBuilder(string $type, iterable $data = null, iterable $options = null)
    {
        return $this->container->get('form.factory')->createBuilder(FormType::class, $data, $options);
    }
}