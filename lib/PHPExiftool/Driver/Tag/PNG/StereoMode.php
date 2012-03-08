<?php

namespace PHPExiftool\Driver\Tag\PNG;

class StereoMode extends \PHPExiftool\Driver\Tag
{

    protected $Id = 0;

    protected $Name = 'StereoMode';

    protected $FullName = 'PNG::StereoImage';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Stereo Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Cross-fuse Layout',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Diverging-fuse Layout',
        ),
    );

}