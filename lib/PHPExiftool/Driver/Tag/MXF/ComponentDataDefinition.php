<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MXF;

use PHPExiftool\Driver\AbstractTag;

class ComponentDataDefinition extends AbstractTag
{

    protected $Id = '060e2b34.0101.0102.04070100.00000000';

    protected $Name = 'ComponentDataDefinition';

    protected $FullName = 'MXF::Main';

    protected $GroupName = 'MXF';

    protected $g0 = 'MXF';

    protected $g1 = 'MXF';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Component Data Definition';

    protected $Values = array(
        '060e2b34.0401.0101.01030201.01000000' => array(
            'Id' => '060e2b34.0401.0101.01030201.01000000',
            'Label' => 'SMPTE 12M Timecode Track',
        ),
        '060e2b34.0401.0101.01030201.02000000' => array(
            'Id' => '060e2b34.0401.0101.01030201.02000000',
            'Label' => 'SMPTE 12M Timecode Track with active user bits',
        ),
        '060e2b34.0401.0101.01030201.03000000' => array(
            'Id' => '060e2b34.0401.0101.01030201.03000000',
            'Label' => 'SMPTE 309M Timecode Track',
        ),
        '060e2b34.0401.0101.01030201.10000000' => array(
            'Id' => '060e2b34.0401.0101.01030201.10000000',
            'Label' => 'Descriptive Metadata Track',
        ),
        '060e2b34.0401.0101.01030202.01000000' => array(
            'Id' => '060e2b34.0401.0101.01030202.01000000',
            'Label' => 'Picture Essence Track',
        ),
        '060e2b34.0401.0101.01030202.02000000' => array(
            'Id' => '060e2b34.0401.0101.01030202.02000000',
            'Label' => 'Sound Essence Track',
        ),
        '060e2b34.0401.0101.01030202.03000000' => array(
            'Id' => '060e2b34.0401.0101.01030202.03000000',
            'Label' => 'Data Essence Track',
        ),
    );

}
