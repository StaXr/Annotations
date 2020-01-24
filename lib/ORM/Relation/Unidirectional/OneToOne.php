<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Unidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields;

/**
 * Class OneToOne
 * @package StaXr\Annotations\ORMRelation\Unidirectional
 * @Annotation
 * @Target("PROPERTY")
 */
final class OneToOne implements Annotation
{
    use AnnotationFields\Relation\TargetEntity;
    use AnnotationFields\Relation\DirectLink;
    use AnnotationFields\Relation\Fetch;
    use AnnotationFields\Relation\OrphanRemoval;
    use AnnotationFields\Relation\Cascade;
}