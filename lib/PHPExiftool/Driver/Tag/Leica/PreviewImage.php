<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

use PHPExiftool\Driver\AbstractTag;

class PreviewImage extends AbstractTag
{

    protected $Id = 768;

    protected $Name = 'PreviewImage';

    protected $FullName = 'Panasonic::Leica6';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Preview Image';

    protected $flag_Permanent = true;

}
