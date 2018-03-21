<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class RenameTest extends TestCase
{

	public function testRename()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/avatars/');

		$image = $avatar->save();

		$this->assertFileNotExists(__DIR__ . '/../resources/avatars/trahkam.svg');

		$image = $avatar->rename();

		$this->assertFileExists(__DIR__ . '/../resources/avatars/trahkam.svg');

		$image = $avatar->setFileName('trahkam');
		$image = $avatar->delete();
	}

	/**
	 * @expectedException Error
	 */
	public function testRenameException()
	{
		$avatar = new Avatar();

		$image = $avatar->rename();
	}
}
