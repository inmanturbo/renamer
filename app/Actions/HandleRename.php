<?php

namespace Inmanturbo\Renamer\Actions;

use Inmanturbo\Renamer\HandlesRename;
use Inmanturbo\Renamer\Rename;

class HandleRename
{
    /**
     * @var array<int|string, \Inmanturbo\Renamer\HandlesRename>
     */
    public $handlers;

    public function __construct(
        public Rename $rename,
        HandlesRename ...$handlers,
    ) {
        $this->handlers = $handlers;
    }
}
