<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Theora;

use PHPExiftool\Driver\AbstractTag;

class NominalVideoBitrate extends AbstractTag
{

    protected $Id = 30;

    protected $Name = 'NominalVideoBitrate';

    protected $FullName = 'Theora::Identification';

    protected $GroupName = 'Theora';

    protected $g0 = 'Theora';

    protected $g1 = 'Theora';

    protected $g2 = 'Video';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Nominal Video Bitrate';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Unspecified',
        ),
    );

}
