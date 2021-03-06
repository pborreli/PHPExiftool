<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Photoshop;

use PHPExiftool\Driver\AbstractTag;

class PhotoshopQuality extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'PhotoshopQuality';

    protected $FullName = 'Photoshop::JPEG_Quality';

    protected $GroupName = 'Photoshop';

    protected $g0 = 'Photoshop';

    protected $g1 = 'Photoshop';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Photoshop Quality';

}
