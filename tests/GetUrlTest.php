<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class GetUrlTest extends TestCase
{

	public function testGetUrl()
	{
		$avatar = new Avatar();

		$image = $avatar->getUrl();

		$this->assertEquals('http://tinygraphs.com/squares/Makhart?theme=heatwave&numcolors=4&size=50&fmt=svg', $image);
	}
}
