<?php

namespace App\Model;

final class Post
{
    private int $id;
    private string $title;
    private string $introduction;
    private string $content;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getIntroduction()
    {
        return $this->introduction;
    }

    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;

        return $this;
    }
 
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}
