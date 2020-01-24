<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM;

/**
 * Class Table
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("CLASS")
 */
final class Table
{
    public string $name;
    public string $schema;
    /**
     * @var Index[]
     */
    public array $indexes =[];
    public array $options;
}