<?php

declare(strinct_types=1);

namespace StaXr\Annotations\Traits\AnnotationFields\Relation;

trait Fetch
{
    /**
     * The fetching strategy to use for the association.
     *
     * @var string
     * @Enum({"LAZY", "EAGER", "EXTRA_LAZY"})
     */
    public string $fetch = 'LAZY';
}