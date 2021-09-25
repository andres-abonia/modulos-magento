<?php

namespace Agsoftware\Prueba2\Setup\Patch\Data;

class PaginasV11 implements \Magento\Framework\Setup\Patch\DataPatchInterface
{
    /**
     * CreateHeaderpage constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param \Magento\Cms\Model\pageRepository $pageRepository
     * @param \Magento\Cms\Api\Data\pageInterface $page
     */

    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Cms\Model\PageRepository $pageRepository,
        \Magento\Cms\Api\Data\PageInterfaceFactory $page,
        \Magento\Cms\Api\GetPageByIdentifierInterface $pageByIdentifier
    ) {
        $this->pageRepository = $pageRepository;
        $this->page = $page;
        $this->moduleDataSetup = $moduleDataSetup;
        $this->pageByIdentifier = $pageByIdentifier;
    }
    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        //code
        $sobre_nosostros_data = [
            'content_heading'=>'Ups, disculpe 2',
            'title' => 'Sobre Nosotros',
            'identifier' => 'sobre-nosostros',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            //'creation_time'=>date('y-M-d'),
            //'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/sobre-nosotros.html'),

        ];
        $this->makeBackup($sobre_nosostros_data);
        $sobre_nosostros = $this->page->create();
        $sobre_nosostros->addData($sobre_nosostros_data);
        $sobre_nosostros->setStores([0]);
        $this->pageRepository->save($sobre_nosostros);
        $data = [
            'title' => 'Descarga de Catalogos / Ofertas',
            'identifier' => 'descarga-de-catalogos/ofertas',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/ofertas.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Hogar',
            'identifier' => 'descarga-de-catalogos/hogar',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/hogar.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);


        /*$data = [
            'title' => 'Descarga de Catalogos / Hogar E Higiene',
            'identifier' => 'descarga-de-catalogos/hogar-e-higiene',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/hogar-e-higiene.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);*/

        $data = [
            'title' => 'Descarga de Catalogos / Mubles',
            'identifier' => 'descarga-de-catalogos/muebles',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/muebles.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Hogar Y Textil',
            'identifier' => 'descarga-de-catalogos/hogar-y-textil',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/hogar-y-textil.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Maletas y Mochilas',
            'identifier' => 'descarga-de-catalogos/maletas-y-mochilas',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/maletas-y-mochilas.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Juguetes',
            'identifier' => 'descarga-de-catalogos/juguetes-de-navidad',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/juguetes-de-navidad.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Alimentos e Higiene',
            'identifier' => 'descarga-de-catalogos/alimentos-e-higiene',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/alimentos-e-higiene.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $data = [
            'title' => 'Descarga de Catalogos / Ropa Y Aseorias',
            'identifier' => 'descarga-de-catalogos/ropa-y-asesorias',
            'page_layout' => 'cms-full-width',
            'is_active' => 1,
            'creation_time'=>date('y-M-d'),
            'update_time'=>date('y-M-d'),
            'sort_order'=>0,
            'content' => file_get_contents(__DIR__.'/html/ropa-y-asesorias.html'),

        ];
        $this->makeBackup($data);
        $page = $this->page->create();
        $page->addData($data);
        $page->setStores([0]);
        $this->pageRepository->save($page);

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    public function makeBackup($data){
        $page = $this->page->create()->load($data['identifier'],'identifier');
        if($page->getId()>0){
            $backup = $this->page->create()->load($data['identifier'].'-backup','identifier');
            if($backup->getId()>0){
                $backup->delete();
            }
            $page->setIdentifier($data['identifier'].'-backup')->setActive(0)->save();
        }
    }

      /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
    /**
     * Revert patch
     */
    public function revert()
    {
        $this->moduleDataSetup->getConnection()->startSetup();
        //code
        $this->moduleDataSetup->getConnection()->endSetup();
    }
}
