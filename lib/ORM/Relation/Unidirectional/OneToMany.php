<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Unidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

/**
 * Class OneToMany
 * @package StaXr\Annotations\ORM
 * @Annotation
 * @Target("PROPERTY")
 */
final class OneToMany implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\DirectLink;
    use AnnotationFields\Relation\Cascade;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;

    public string $indexBy;
}