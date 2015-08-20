<?php
namespace Bolt\Storage\Entity;

/**
 * Entity for Content.
 *
 * @method integer getId()
 * @method string  getSlug()
 * @method integer getOwnerid()
 * @method string  getStatus()
 * @method array   getTemplatefields()
 * @method setId(integer $id)
 * @method setSlug(string  $slug)
 * @method setOwnerid(integer $ownerid)
 * @method setStatus(string  $status)
 * @method getTemplatefields(array $templatefields)
 */
class Content extends Entity
{
    protected $_contenttype;
    protected $id;
    protected $slug;
    protected $datecreated;
    protected $datechanged;
    protected $datepublish = null;
    protected $datedepublish = null;
    protected $ownerid;
    protected $status;
    protected $templatefields;

    public function getDatecreated()
    {
        if (!$this->datecreated) {
            return new \DateTime();
        }

        return $this->datecreated;
    }

    public function getDatechanged()
    {
        if (!$this->datechanged) {
            return new \DateTime();
        }

        return $this->datechanged;
    }

    public function getContenttype()
    {
        return $this->_contenttype;
    }

    public function setContenttype($value)
    {
        $this->_contenttype = $value;
    }
}