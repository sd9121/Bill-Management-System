<?php

namespace Drupal\Core\TypedData\Type;

use Drupal\Core\TypedData\PrimitiveInterface;

/**
 * Interface for textarea.
 *
 *  The plain value of a string is a regular PHP string. For setting the value
 * any PHP variable that casts to a string may be passed.
 *
 * @ingroup typed_data
 */
interface TextAreaInterface extends PrimitiveInterface {

}
