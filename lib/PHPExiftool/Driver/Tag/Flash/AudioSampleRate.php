<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Flash;

use PHPExiftool\Driver\AbstractTag;

class AudioSampleRate extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'AudioSampleRate';

    protected $FullName = 'mixed';

    protected $GroupName = 'Flash';

    protected $g0 = 'Flash';

    protected $g1 = 'Flash';

    protected $g2 = 'mixed';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Sample Rate';

    protected $local_g2 = 'mixed';

}
