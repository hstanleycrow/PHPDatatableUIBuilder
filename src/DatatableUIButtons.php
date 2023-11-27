<?php

namespace hstanleycrow\EasyPHPDatatableCRUD;

use hstanleycrow\EasyPHPDatatables\Datatable;

class DatatableUIButtons
{
    protected string $addButtonClass = Buttons\AddButton::class;
    protected string $DTDefinition;

    public function setDTDefinition(string $DTDefinition): self
    {
        $this->DTDefinition = $DTDefinition;
        return $this;
    }
    public function setAddButtonClass(string $class): self
    {
        $this->addButtonClass = $class;
        return $this;
    }
    public function getAddButton(): string
    {
        return (new $this->addButtonClass($this->DTDefinition))->render();
    }
}
