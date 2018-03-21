<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class DownloadTest extends TestCase
{

	/**
	 * @expectedException Error
	 */
	public function testDownloadException()
	{
		$avatar = new Avatar();

		$image = $avatar->setShape('shape');

		$image = $avatar->download();
	}
}
