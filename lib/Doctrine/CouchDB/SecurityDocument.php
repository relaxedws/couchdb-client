<?php

namespace Doctrine\CouchDB;

class SecurityDocument
{
    /**
     * @var array
     */
    private $data = [];

    public function getData()
    {
        return $this->data;
    }

    public function addAdminName($name)
    {
        $this->addEntry('admins', 'names', $name);
    }

    public function addAdminRole($role)
    {
        $this->addEntry('admins', 'roles', $name);
    }

    public function addMemberName($name)
    {
        $this->addEntry('members', 'names', $name);
    }

    public function addMemberRole($role)
    {
        $this->addEntry('members', 'roles', $name);
    }

    private function addEntry($role, $type, $val)
    {
        if (!isset($this->data[$role][$type])) {
            $this->data[$role][$type] = [];
        }
        $this->data[$role][$type][] = $val;
    }
}
