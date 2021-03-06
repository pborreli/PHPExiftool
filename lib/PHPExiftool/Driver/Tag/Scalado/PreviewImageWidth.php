<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Scalado;

use PHPExiftool\Driver\AbstractTag;

class PreviewImageWidth extends AbstractTag
{

    protected $Id = 'WDTH';

    protected $Name = 'PreviewImageWidth';

    protected $FullName = 'JPEG::Scalado';

    protected $GroupName = 'Scalado';

    protected $g0 = 'APP4';

    protected $g1 = 'Scalado';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = false;

    protected $Description = 'Preview Image Width';

}
