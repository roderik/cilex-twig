<?php

/*
 * This file is part of the Silex framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cilex\Provider;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Twig extension.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TwigCoreExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'render' => new \Twig_Function_Method($this, 'render', array('needs_environment' => true, 'is_safe' => array('html'))),
        );
    }

    public function getName()
    {
        return 'cilex';
    }
}
