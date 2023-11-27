<?php

namespace hstanleycrow\EasyPHPDatatableCRUD;

use hstanleycrow\EasyPHPDatatables\Datatable;

class DatatableClient implements DatatableInterface
{
    protected Datatable $datatable;

    public function __construct(Datatable $datatable)
    {
        $this->datatable = $datatable;
        #$this->datatable = new Datatable($DTDefinition, $dtDisabledIdButtons);
    }

    public function addCssClass(string $class): self
    {
        $this->datatable->addCssClass($class);
        return $this;
    }

    public function render(): string
    {
        return $this->datatable->render();
    }

    public function autoLoadDatatableJS(): string
    {
        return $this->datatable->autoLoadDatatableJS();
    }
    public function autoLoadCssResources(): string
    {
        return $this->datatable->autoLoadCssResources();
    }
    public function autoLoadJsResources(): string
    {
        return $this->datatable->autoLoadJsResources();
    }
    public function setTableId(string $tableId): self
    {
        $this->datatable->setTableId($tableId);
        return $this;
    }
    public function setDTLanguage(string $language): self
    {
        $this->datatable->setDTLanguage($language);
        return $this;
    }
    public function setDTRowsPerPage(int $rowsPerPage = 25): self
    {
        $this->datatable->setDTRowsPerPage($rowsPerPage);
        return $this;
    }
    public function setFramework(string $framework): void
    {
        $this->datatable->setFramework($framework);
    }
}
