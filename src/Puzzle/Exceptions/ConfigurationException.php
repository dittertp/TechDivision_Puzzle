<?php

/**
 * Puzzle\Exceptions\ConfigurationException
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to version 3 of the GPL license,
 * that is bundled with this package in the file LICENSE, and is
 * available online at http://www.gnu.org/licenses/gpl.txt
 *
 * PHP version 5
 *
 * @category  Puzzle
 * @package   Puzzle
 * @author    Philipp Dittert <philipp.dittert@gmail.com>
 * @copyright 2015 Philipp Dittert
 * @license   http://www.gnu.org/licenses/gpl.txt GNU General Public License, version 3 (GPL-3.0)
 * @link      https://github.com/dittertp/Puzzle
 */

namespace Puzzle\Exceptions;

/**
 * class ConfigurationException
 *
 * @category  Puzzle
 * @package   Puzzle
 * @author    Philipp Dittert <philipp.dittert@gmail.com>
 * @copyright 2015 Philipp Dittert
 * @license   http://www.gnu.org/licenses/gpl.txt GNU General Public License, version 3 (GPL-3.0)
 * @link      https://github.com/dittertp/Puzzle
 */

class ConfigurationException extends \Exception
{
    /**
     * creates class instance
     *
     * @param string $message the message
     */
    public function __construct($message = 'Not Found')
    {
        parent::__construct($message, 404);
    }
}
