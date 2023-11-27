<?php

namespace hstanleycrow\EasyPHPDatatableCRUD;

interface DatatableInterface
{
    public function autoLoadDatatableJS(): string;
    public function autoLoadCssResources(): string;
    public function autoLoadJsResources(): string;
    public function addCssClass(string $class): self;
    public function setTableId(string $tableId): self;
    public function setDTLanguage(string $language): self;
    public function setDTRowsPerPage(int $rowsPerPage = 25): self;
    public function setFramework(string $framework): void;
    public function render(): string;
}
