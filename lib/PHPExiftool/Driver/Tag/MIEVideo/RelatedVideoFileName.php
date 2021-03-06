<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEVideo;

use PHPExiftool\Driver\AbstractTag;

class RelatedVideoFileName extends AbstractTag
{

    protected $Id = '1Name';

    protected $Name = 'RelatedVideoFileName';

    protected $FullName = 'MIE::Video';

    protected $GroupName = 'MIE-Video';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Video';

    protected $g2 = 'Video';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Related Video File Name';

}
