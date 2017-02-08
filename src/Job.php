<?php
class Job
{
    private $description;
    private $title;
    private $startDate;
    private $endDate;

    function __construct($description, $title, $startDate, $endDate)
    {
        $this->description = $description;
        $this->title = $title;
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function setTitle($new_title)
    {
        $this->title = (string) $new_title;
    }

    function getDescription()
    {
        return $this->description;
    }

    function getTitle()
    {
        return $this->title;
    }
    function getStartDate()
    {
        return $this->startDate;
    }
    function getEndDate()
    {
        return $this->endDate;
    }

    function save()
    {
        array_push($_SESSION['list_of_jobs'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_jobs'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_jobs'] = array();
    }
}
?>
