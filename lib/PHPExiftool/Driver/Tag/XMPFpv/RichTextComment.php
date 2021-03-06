<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPFpv;

use PHPExiftool\Driver\AbstractTag;

class RichTextComment extends AbstractTag
{

    protected $Id = 'RichTextComment';

    protected $Name = 'RichTextComment';

    protected $FullName = 'XMP::fpv';

    protected $GroupName = 'XMP-fpv';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-fpv';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Rich Text Comment';

}
