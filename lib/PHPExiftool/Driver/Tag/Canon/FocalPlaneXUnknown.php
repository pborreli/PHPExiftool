<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class FocalPlaneXUnknown extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'FocalPlaneXUnknown';

    protected $FullName = 'Canon::FocalLength';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Focal Plane X Unknown';

    protected $flag_Permanent = true;

    protected $Index = 1;

}
