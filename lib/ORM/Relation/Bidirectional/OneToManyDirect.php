<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Bidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

/**
 * Class OneToManyDirect
 * @package StaXr\Annotations\ORM\Relation\Bidirectional
 * @Annotation
 * @Target("PROPERTY")
 */
final class OneToManyDirect implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\DirectLink;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;
    use AnnotationFields\Relation\Cascade;
}