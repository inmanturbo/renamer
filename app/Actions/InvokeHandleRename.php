<?php

namespace Inmanturbo\Renamer\Actions;

class InvokeHandleRename
{
    public function __invoke(HandleRename $action): void
    {
        foreach ($action->handlers as $handler) {
            app(get_class($handler))($action->rename);
        }
    }
}
