<?php

declare(strict_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields\ReadOnly;

/**
 * Class Entity
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class Entity implements Annotation
{
    use ReadOnly;

    public string $repository;
}