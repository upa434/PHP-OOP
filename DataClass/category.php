<?php


class category
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;

    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

}