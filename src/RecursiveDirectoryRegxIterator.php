<?php
/**
 * Webino™ (http://webino.sk)
 *
 * @link        https://github.com/webino/recursive-directory-regex-iterator
 * @copyright   Copyright (c) 2019 Webino, s.r.o. (http://webino.sk)
 * @author      Peter Bačinský <peter@bacinsky.sk>
 * @license     BSD-3-Clause
 */
namespace Webino;

/**
 * Class RecursiveDirectoryRegexIterator
 */
class RecursiveDirectoryRegexIterator extends \RegexIterator
{
    /**
     * Recursively returns files in provided directory path matching regular expression.
     *
     * @param string $dir Target directory path
     * @param string $regEx Regular expression
     * @param null $mode RegexIterator mode
     */
    public function __construct($dir, $regEx, $mode = null)
    {
        $it = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator((string) $dir));
        parent::__construct($it, $regEx, $mode);
    }
}
