<?php

class Post
{
    private int $id;
    private int $likes = 0;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLikes()
    {
        return $this->likes;
    }
}

class Foto extends Post
{
    private string $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function getUrl()
    {
        return $this->url;
    }
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl("abc");

echo "FOTO: #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();