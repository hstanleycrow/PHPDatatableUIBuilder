<?php

namespace hstanleycrow\EasyPHPDatatableCRUD;

use hstanleycrow\EasyPHPDatatables\Datatable;

class DatatableUIBuilder extends BaseDatatable
{
    protected DatatableUIButtons $buttonsClasses;
    protected array $buttonsToRender = [
        'add' => true,
        'edit' => true,
        'delete' => true
    ];

    public function __construct(string $DTDefinition, ?array $dtDisabledIdButtons = [])
    {
        $this->buttonsClasses = new DatatableUIButtons();
        $this->buttonsClasses->setDTDefinition($DTDefinition);
        $datatable = new Datatable($DTDefinition, $dtDisabledIdButtons);
        $datatableClient = new DatatableClient($datatable);
        parent::__construct($datatableClient);
    }
    public function changeButtonsToRender(array $buttonsToRender = []): self
    {
        $this->buttonsToRender = array_merge($this->buttonsToRender, $buttonsToRender);
        return $this;
    }
    public function disableButton(string $button): self
    {
        $this->buttonsToRender[$button] = false;
        return $this;
    }
    public function setAddButtonClass(string $class): self
    {
        $this->buttonsClasses->setAddButtonClass($class);
        return $this;
    }

    public function render(): string
    {
        $output = '<div id="dtcontainer">';
        if ($this->isButtonRendereable('add')) {
            $output .= '<br><div id="addButtonContainer">';
            $output .= $this->buttonsClasses->getAddButton();
            $output .= '</div><br>';
        }
        $output .= parent::render();
        $output .= '</div>';

        return $output;
    }
    protected function isButtonRendereable(string $button): bool
    {
        return $this->buttonsToRender[$button];
    }
}
