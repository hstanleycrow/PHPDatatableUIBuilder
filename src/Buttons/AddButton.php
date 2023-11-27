<?php

namespace hstanleycrow\EasyPHPDatatableCRUD\Buttons;

class AddButton extends BaseLink
{
    protected ?string $id = null;
    protected ?string $name = null;
    protected string $buttonText = 'Agregar';
    protected ?string $href = "agregar";

    public function __construct(?string $DTDefinition)
    {
        $this->href = $href ?? $this->href;
        $this->href = $DTDefinition . '/' . $this->href . '/';
        $linkContent = $this->buttonText;
        $linkClient = new LinkClient($this->href, $linkContent);
        parent::__construct($linkClient);
    }
}
