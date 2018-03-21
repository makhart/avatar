<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class GetHtmlTest extends TestCase
{

	public function testGetSrc()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/avatars/');

		$image = $avatar->getHtml();

		$this->assertEquals('<img src="' . __DIR__ . '/../resources/avatars/makhart.svg">', $image);
	}
}
