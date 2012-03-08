<?php

namespace PHPExiftool\Driver\Tag\H264;

class ApertureSetting extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'ApertureSetting';

    protected $FullName = 'H264::Camera1';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Aperture Setting';

    protected $Values = array(
        254 => array(
            'Id' => 254,
            'Label' => 'Closed',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'Auto',
        ),
    );

}