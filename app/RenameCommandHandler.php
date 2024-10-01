<?php

namespace Inmanturbo\Renamer;

use Inmanturbo\Renamer\Actions\HandleRename;
use Inmanturbo\Renamer\Actions\InvokeHandleRename;

class RenameCommandHandler implements HandlesRename
{
    protected function handlers():array
    {
        return [
            new ReplaceInAppFiles,
            new UpdateNamespaceInComposer,
        ];
    }

    /**
     * Invoke the class instance.
     */
    public function __invoke(Rename $rename): void
    {
        app(InvokeHandleRename::class)(new HandleRename($rename, ...$this->handlers()));
    }
}
