<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class SaveTest extends TestCase
{

	public function testSave()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/avatars/');

		$this->assertFileNotExists(__DIR__ . '/../resources/avatars/makhart.svg');

        $image = $avatar->save();

		$this->assertFileExists(__DIR__ . '/../resources/avatars/makhart.svg');

		$image = $avatar->delete();
	}

	/**
	 * @expectedException Error
	 */
	public function testSaveException()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/sratava/');

		$image = $avatar->save();
	}
}
