<?php

namespace Inmanturbo\Renamer;

interface HandlesRename
{
    public function __invoke(Rename $rename): void;
}
