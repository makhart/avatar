<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class DeleteTest extends TestCase
{

	public function testDelete()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath(__DIR__ . '/../resources/avatars/');

		$image = $avatar->save();

		$this->assertFileExists(__DIR__ . '/../resources/avatars/makhart.svg');

		$image = $avatar->delete();

		$this->assertFileNotExists(__DIR__ . '/../resources/avatars/makhart.svg');
	}

	/**
	 * @expectedException Error
	 */
	public function testDeleteException()
	{
		$avatar = new Avatar();

		$image = $avatar->delete();
	}
}
