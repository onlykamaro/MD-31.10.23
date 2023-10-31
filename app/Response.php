<?php

declare(strict_types=1);

namespace App;

class Response
{
    private array $data;
    private string $viewName;

    public function __construct(string $viewName, array $data)
    {
        $this->data = $data;
        $this->viewName = $viewName;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function getViewName(): string
    {
        return $this->viewName;
    }
}