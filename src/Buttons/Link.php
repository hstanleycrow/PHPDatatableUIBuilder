<?php

namespace hstanleycrow\EasyPHPDatatableCRUD\Buttons;


class Link
{
    protected string $class = '';
    protected ?string $rel = null;
    protected ?string $target = '_self';
    protected ?string $type = null;
    protected ?string $download = null;


    public function __construct(protected string $href, protected string $linkContent)
    {
    }

    public function render(): string
    {
        $link = '<a ';
        $link .= $this->renderAttributes();
        $link .= '>';
        $link .= $this->linkContent;
        $link .= '</a>';
        return $link;
    }

    private function renderAttributes(): string
    {
        $attributes = 'class="' . $this->class . '" ';
        $attributes .= 'href="' . $this->href . '" ';
        $attributes .= $this->target ? 'target="' . $this->target . '" ' : '';
        $attributes .= $this->rel ? 'rel="' . $this->rel . '" ' : '';
        $attributes .= $this->download ? 'download="' . $this->download . '" ' : '';
        return $attributes;
    }
    /**
     * Set the value of class
     *
     * @return  self
     */
    public function addClass($class): self
    {
        $this->class .= $class;

        return $this;
    }

    /**
     * Set the value of rel
     *
     * @return  self
     */
    public function setRel($rel): self
    {
        $this->rel = $rel;

        return $this;
    }

    /**
     * Set the value of target
     *
     * @return  self
     */
    public function setTarget($target): self
    {
        $this->target = $target;

        return $this;
    }
    /**
     * Set the value of download
     *
     * @return  self
     */
    public function setDownload($download)
    {
        $this->download = $download;

        return $this;
    }
}
