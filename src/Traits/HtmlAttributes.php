<?php

namespace Noldors\Forms\Traits;

trait HtmlAttributes
{
    private $attributes;

    public function setAttribute(string $key, $value):self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    public function setAttributes(iterable $attributes): self
    {
        foreach($attributes as $key => $value) {
            $this->setAttribute($key, $value);
        }

        return $this;
    }

    public function hasAttribute(string $key):bool
    {
        return array_key_exists($key, $this->attributes);
    }
}