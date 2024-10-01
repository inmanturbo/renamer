<?php

namespace Inmanturbo\Renamer;

use Inmanturbo\Tandem\Actions\FindAndReplaceInFiles;
use Inmanturbo\Tandem\Actions\InvokeFindReplaceInFiles;

class ReplaceInAppFiles implements HandlesRename
{
    protected function replacers(Rename $rename): array
    {
        return [
           FindAndReplaceInFiles::make($rename->fromNamespace(), $rename->fullyQualifiedNamespace(), $rename->basePath()),
        ];
    }

    public function __invoke(Rename $rename): void
    {
        app(InvokeFindReplaceInFiles::class)(...$this->replacers($rename));
    }
}
