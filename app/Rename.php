<?php

namespace Inmanturbo\Renamer;

use function Illuminate\Filesystem\join_paths;

class Rename
{
    public function __construct(
        public string $basePath,
        public string $fromAppNamespace,
        public string $toAppNamespace,
        public string $fromVendorNamespace,
        public string $toVendorNamespace,
        public string $name,

    )
    {
        //
    }

    public function basePath(): string
    {
        return $this->basePath;
    }

    public function fromNamespace(): ?string
    {

        return "{$this->fromVendorNamespace}\\{$this->fromAppNamespace}";
    }

    public function fullyQualifiedNamespace(): ?string
    {

        return "{$this->toVendorNamespace}\\{$this->toAppNamespace}";
    }

    public function composerFile()
    {
        return join_paths($this->basePath(), 'composer.json');
    }

    public function packageName()
    {
        return $this->name;
    }
}
