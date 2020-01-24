<?php

declare(strinct_types=1);

namespace StaXr\Annotations\ORM\Relation\Bidirectional;

use StaXr\Annotations\Interfaces\Annotation;
use StaXr\Annotations\Traits\AnnotationFields\Relation;

/**
 * Class OneToOneDirect
 * @package StaXr\Annotations\ORM\Relation\Bidirectional
 * @Annotation
 * @Target("PROPERTY")
 */
final class OneToOneDirect implements Annotation
{
    use Relation\TargetEntity;
    use Relation\Fetch;
    use Relation\OrphanRemoval;
    use Relation\Cascade;
    use Relation\DirectLink;
}