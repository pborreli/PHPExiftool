<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPExpressionmedia;

use PHPExiftool\Driver\AbstractTag;

class CatalogSets extends AbstractTag
{

    protected $Id = 'CatalogSets';

    protected $Name = 'CatalogSets';

    protected $FullName = 'XMP::ExpressionMedia';

    protected $GroupName = 'XMP-expressionmedia';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-expressionmedia';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Catalog Sets';

    protected $flag_Avoid = true;

    protected $flag_List = true;

    protected $flag_Bag = true;

}
