<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

use StaXr\Annotations\Interfaces\Annotation;

/**
 * Class Index
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("ANNOTATION")
 */
final class Index implements Annotation
{
    public string $name;
    /**
     * @var string[];
     */
    public array $columns;
    public bool $unique = false;
    /**
     * @var string[];
     */
    public array $flags = [];
    public array $options =[];
}