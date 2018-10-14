<?php

namespace CleaniqueCoders\Leave\Contracts;

interface Detail
{
    public function setPurpose(string $purpose): Detail;

    public function getPurpose(): string;

    public function setTitle(string $title): Detail;

    public function getTitle(): string;
}
