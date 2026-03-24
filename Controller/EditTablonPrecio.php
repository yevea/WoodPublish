<?php
namespace FacturaScripts\Plugins\WoodPublish\Controller;

use FacturaScripts\Core\Lib\EditController;

class EditTablonPrecio extends EditController
{
    public function getModelClassName(): string
    {
        return 'TablonPrecio';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['title'] = 'tablon-precio';
        $data['menu'] = 'admin';
        $data['icon'] = 'fa-solid fa-money-bill';
        return $data;
    }

    protected function createViews(): void
    {
        $this->addEditView('EditTablonPrecio', 'TablonPrecio', 'tablon-precio', 'fa-solid fa-money-bill');
    }
}
