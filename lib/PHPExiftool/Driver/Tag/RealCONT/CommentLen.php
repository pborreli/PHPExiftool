<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealCONT;

use PHPExiftool\Driver\AbstractTag;

class CommentLen extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'CommentLen';

    protected $FullName = 'Real::ContentDescr';

    protected $GroupName = 'Real-CONT';

    protected $g0 = 'Real';

    protected $g1 = 'Real-CONT';

    protected $g2 = 'Video';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Comment Len';

}
