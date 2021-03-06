<?php

/*
 * This file is part of the ideneal/openload library
 *
 * (c) Daniele Pedone <ideneal.ztl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ideneal\OpenLoad\Test\Builder;

use Ideneal\OpenLoad\Builder\ContentBuilder;

/**
 * ContentBuilderTest
 *
 * @author Daniele Pedone aka Ideneal <ideneal.ztl@gmail.com>
 */
class ContentBuilderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string The folder result fixture
     */
    private $folderFixture = '{"id": "5144","name": ".videothumb"}';

    /**
     * @var string The file result fixture
     */
    private $fileFixture = '{"name": "big_buck_bunny.mp4.mp4","sha1": "c6531f5ce9669d6547023d92aea4805b7c45d133","folderid": "4258","upload_at": "1419791256","status": "active","size": "5114011","content_type": "video/mp4","download_count": "48","cstatus": "ok","link": "https://openload.co/f/UPPjeAk--30/big_buck_bunny.mp4.mp4","linkextid": "UPPjeAk--30"}';

    /**
     * Tests the building of a folder
     */
    public function testBuildFolder()
    {
        $data   = json_decode($this->folderFixture, true);
        $folder = ContentBuilder::buildFolder($data);
        $this->assertInstanceOf('Ideneal\OpenLoad\Entity\Folder', $folder);
    }

    /**
     * Tests the building of a file
     */
    public function testBuildFile()
    {
        $data = json_decode($this->fileFixture, true);
        $file = ContentBuilder::buildFile($data);
        $this->assertInstanceOf('Ideneal\OpenLoad\Entity\File', $file);
    }
}
