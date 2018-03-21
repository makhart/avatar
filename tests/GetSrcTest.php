<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class GetSrcTest extends TestCase
{

	public function testGetSrc()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/avatars/');

		$image = $avatar->getSrc();

		$this->assertEquals(__DIR__ . '/../resources/avatars/makhart.svg', $image);
	}
}
