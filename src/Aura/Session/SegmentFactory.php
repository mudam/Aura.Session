<?php
/**
 * 
 * This file is part of the Aura Project for PHP.
 * 
 * @package Aura.Session
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Session;

/**
 * 
 * A factory to create session segment objects.
 * 
 * @package Aura.Session
 * 
 */
class SegmentFactory
{
    /**
     * 
     * Creates a session segment object.
     * 
     * @param string $name
     * 
     * @return \Aura\Session\Segment
     * 
     */
    public function newInstance($name)
    {
        if (! isset($_SESSION[$name])) {
            $_SESSION[$name] = [];
        }
        return new Segment($name, $_SESSION[$name]);
    }
}
