<?php

namespace Orion\Concerns;

trait InteractsWithSoftDeletes
{
    /**
     * Determine whether the given resource model uses soft deletes.
     *
     * @param string $resourceModelClass
     * @return bool
     */
    public function softDeletes(string $resourceModelClass)
    {
        return method_exists(new $resourceModelClass, 'trashed');
    }
}
