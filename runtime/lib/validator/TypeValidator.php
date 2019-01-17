<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

/**
 * A validator for validating the (PHP) type of the value submitted.
 *
 * <code>
 *   <column name="some_int" type="INTEGER" required="true"/>
 *
 *   <validator column="some_int">
 *     <rule name="type" value="integer" message="Please specify an integer value for some_int column." />
 *   </validator>
 * </code>
 *
 * @author     Hans Lellelid <hans@xmpl.org>
 * @version    $Revision$
 * @package    propel.runtime.validator
 */
class TypeValidator implements BasicValidator
{
    /**
     * @see       BasicValidator::isValid()
     *
     * @param ValidatorMap $map
     * @param mixed        $value
     *
     * @return boolean
     *
     * @throws PropelException
     */
    public function isValid(ValidatorMap $map, $value)
    {
        switch ($map->getValue()) {
            case 'array':
                return is_array($value);
                break;
            case 'bool':
            case 'boolean':
                return is_bool($value);
                break;
            case 'float':
                return is_float($value);
                break;
            case 'int':
            case 'integer':
                return is_int($value);
                break;
            case 'numeric':
                return is_numeric($value);
                break;
            case 'object':
                return is_object($value);
                break;
            case 'resource':
                return is_resource($value);
                break;
            case 'scalar':
                return is_scalar($value);
                break;
            case 'string':
                return is_string($value);
                break;
            case 'function':
                return function_exists($value);
                break;
            default:
                throw new PropelException('Unknown type ' . $map->getValue());
                break;
        }
    }
    
    /**
     * Determine whether or not a variable can be counted.
     *
     * In PHP 7.3, a new is_countable() is available however it's implementation
     * only looks to see if the object is an array or an instance of Countable.
     * This is not enough to satisfy the objects returned within the Symfony/VA
     * code.  Therefore, we have to look for IteratoAggregate as well as Countable.
     *
     * @see https://wiki.php.net/rfc/is-countable RFC for PHP 7.3 is_countable().
     *
     * @param  $var
     *
     * @return bool
     */
    
    public static function isCountable($var){
        return \is_array($var)
                   || $var instanceof Countable
                   || $var instanceof IteratorAggregate;
    }
}
