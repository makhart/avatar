<?php

use Makhart\Avatar\Avatar;
use PHPUnit\Framework\TestCase;

class ParametersTest extends TestCase
{

	public function testName()
	{
		$avatar = new Avatar();

		$image = $avatar->setName('testName');

		$image = $avatar->getName();

		$this->assertEquals('testName', $image);
	}

	public function testShape()
	{
		$avatar = new Avatar();

		$image = $avatar->setShape('testShape');

		$image = $avatar->getShape();

		$this->assertEquals('testShape', $image);
	}

	public function testTheme()
	{
		$avatar = new Avatar();

		$image = $avatar->setTheme('testTheme');

		$image = $avatar->getTheme();

		$this->assertEquals('testTheme', $image);
	}

	public function testNumberColors()
	{
		$avatar = new Avatar();

		$image = $avatar->setNumberColors('0');

		$image = $avatar->getNumberColors();

		$this->assertEquals('0', $image);
	}

	public function testSize()
	{
		$avatar = new Avatar();

		$image = $avatar->setSize('0');

		$image = $avatar->getSize();

		$this->assertEquals('0', $image);
	}

	public function testPath()
	{
		$avatar = new Avatar();

		$image = $avatar->setPath('testPath');

		$image = $avatar->getPath();

		$this->assertEquals('testPath', $image);
	}

	public function testFileName()
	{
		$avatar = new Avatar();

		$image = $avatar->setFileName('testFileName');

		$image = $avatar->getFileName();

		$this->assertEquals('testFileName', $image);
	}

	public function testExtension()
	{
		$avatar = new Avatar();

		$image = $avatar->setExtension('testExtension');

		$image = $avatar->getExtension();

		$this->assertEquals('testExtension', $image);
	}

	public function testNewFileName()
	{
		$avatar = new Avatar();

		$image = $avatar->setNewFileName('testNewFileName');

		$image = $avatar->getNewFileName();

		$this->assertEquals('testNewFileName', $image);
	}
}
