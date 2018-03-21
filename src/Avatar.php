<?php

namespace Makhart\Avatar;

class Avatar
{
    private $name;
    private $shape;
    private $theme;
    private $numberColors;
    private $size;
    private $path;
    private $fileName;
    private $extension;
    private $newFileName;

    public function __construct()
    {
        $this->setDefault();
    }

    public function setDefault() : void
    {
        $this->setName('Makhart');
        $this->setShape('squares');
        $this->setTheme('heatwave');
        $this->setNumberColors('4');
        $this->setSize('50');
        $this->setPath(__DIR__ . '/../resources/avatars/');
        $this->setFileName('makhart');
        $this->setExtension('svg');
        $this->setNewFileName('trahkam');
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setShape(string $shape) : void
    {
        $this->shape = $shape;
    }

    public function setTheme(string $theme) : void
    {
        $this->theme = $theme;
    }

    public function setNumberColors(int $numberColors) : void
    {
        $this->numberColors = $numberColors;
    }

    public function setSize(int $size) : void
    {
        $this->size = $size;
    }

    public function setPath(string $path) : void
    {
        $this->path = $path;
    }

    public function setFileName(string $fileName) : void
    {
        $this->fileName = $fileName;
    }

    public function setExtension(string $extension) : void
    {
        $this->extension = $extension;
    }

    public function setNewFileName(string $newFileName) : void
    {
        $this->newFileName = $newFileName;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getShape() : string
    {
        return $this->shape;
    }

    public function getTheme() : string
    {
        return $this->theme;
    }

    public function getNumberColors() : int
    {
        return $this->numberColors;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function getPath() : string
    {
        return $this->path;
    }

    public function getFileName() : string
    {
        return $this->fileName;
    }

    public function getExtension() : string
    {
        return $this->extension;
    }

    public function getNewFileName() : string
    {
        return $this->newFileName;
    }

    public function download() : string
    {
        $url = $this->getUrl();

        $download = @file_get_contents($url);

        if ($download === false) {
            throw new Exception('Error download');
        } else {
            return $download;
        }
    }

    public function save() : void
    {
        $path = $this->getPath();
        $fileName = $this->getFileName();
        $extension = $this->getExtension();

        $download = $this->download();

        $save = @file_put_contents($path . $fileName . '.' . $extension, $download);

        if ($save === false) {
            throw new Exception("Error save");
        }
    }

    public function rename() : void
    {
        $path = $this->getPath();
        $fileName = $this->getFileName();
        $newFileName = $this->getNewFileName();
        $extension = $this->getExtension();

        $rename = @rename($path . $fileName . '.' . $extension, $path . $newFileName . '.' . $extension);

        if ($rename === false) {
            throw new Exception("Error rename");
        }
    }

    public function delete() : void
    {
        $path = $this->getPath();
        $fileName = $this->getFileName();
        $extension = $this->getExtension();

        $delete = @unlink($path . $fileName . '.' . $extension);

        if ($delete === false) {
            throw new Exception("Error delete");
        }
    }

    public function getUrl() : string
    {
        $name = $this->getName();
        $shape = $this->getShape();
        $theme = $this->getTheme();
        $numberColors = $this->getNumberColors();
        $size = $this->getSize();
        $extension = $this->getExtension();

        $url = 'http://tinygraphs.com/' . $shape . '/' . $name . '?theme=' . $theme . '&numcolors=' . $numberColors . '&size=' . $size . '&fmt=' . $extension;

        return $url;
    }

    public function getHtml() : string
    {
        $src = $this->getSrc();

        $html = '<img src="' . $src . '">';

        return $html;
    }

    public function getSrc() : string
    {
        $path = $this->getPath();
        $fileName = $this->getFileName();
        $extension = $this->getExtension();

        $src = $path . $fileName . '.' . $extension;

        return $src;
    }
}
