<?php

namespace Inmanturbo\Renamer;

use Inmanturbo\Tandem\Actions\InvokeUpdateComposerJson;
use Inmanturbo\Tandem\Actions\UpdateComposerJson;
use Inmanturbo\Tandem\ComposerPackageData;

class UpdateNamespaceInComposer implements HandlesRename
{
    public function __invoke(Rename $rename): void
    {
        app(InvokeUpdateComposerJson::class)(new UpdateComposerJson($rename->composerFile(), $this->composerPackageData($rename)));
    }

    protected function composerPackageData(Rename $rename): array
    {
        $data = new ComposerPackageData($rename->fullyQualifiedNamespace(), $rename->packageName());

        return $data->data();
    }
}
