<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\Cache;

trait WriteThroughCache
{
    protected static function bootWriteThroughCache()
    {
        static::saved(function ($model) {
            // Do some work to get the tag.
            $classNamePath = get_class($model);
            $classNameArray = explode('\\', $classNamePath);
            $className = strtolower(end($classNameArray));

            // Handle cache logic
            Cache::tags($className)->forget($model->getKey());
            Cache::tags($className)->remember($model->getKey(), now()->addMinutes($model->minutesToCache ?? 10), function () use ($model) {
                return $model;
            });
        });
    }
}
