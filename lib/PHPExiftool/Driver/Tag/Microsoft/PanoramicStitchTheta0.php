<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Microsoft;

use PHPExiftool\Driver\AbstractTag;

class PanoramicStitchTheta0 extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'PanoramicStitchTheta0';

    protected $FullName = 'Microsoft::Stitch';

    protected $GroupName = 'Microsoft';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Microsoft';

    protected $g2 = 'Image';

    protected $Type = 'float';

    protected $Writable = true;

    protected $Description = 'Panoramic Stitch Theta 0';

    protected $flag_Permanent = true;

}
