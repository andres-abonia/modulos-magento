<?php

namespace AgSoftware\Amor\Setup\Patch\Data;

class amor implements \Magento\Framework\Setup\Patch\DataPatchInterface
{
    /**
     * CreateHeaderBlock constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param \Magento\Cms\Model\BlockRepository $blockRepository
     * @param \Magento\Cms\Api\Data\BlockInterface $block
     */

    public function __construct(
        \Magento\Framework\Setup\ModuleDataSetupInterface $moduleDataSetup,
        \Magento\Cms\Model\BlockRepository $blockRepository,
        \Magento\Cms\Api\Data\BlockInterfaceFactory $block,
        \Magento\Cms\Api\GetBlockByIdentifierInterface $blockByIdentifier
    ) {
        $this->blockRepository = $blockRepository;
        $this->block = $block;
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockByIdentifier = $blockByIdentifier;
    }
    /**
     * {@inheritdoc}
     */
    public function apply()
    { 
        $this->moduleDataSetup->getConnection()->startSetup();

        $block_data_head= [
            'title' => 'amor y amistad ',
            'identifier' => 'amor1',
            'is_active' => 1,
            'content' => file_get_contents(__DIR__.'/html/amor.html'),
        ];
        $this->makeBackup($block_data_head);
        $block_head = $this->block->create();
        $block_head->addData($block_data_head);
        $block_head->setStores([0]);
        $this->blockRepository->save($block_head);
        $this->moduleDataSetup->getConnection()->endSetup();
    }

    public function makeBackup($data){
        $block = $this->block->create()->load($data['identifier'],'identifier');
        if($block->getId()>0){
            $backup = $this->block->create()->load($data['identifier'].'-backup','identifier');
            if($backup->getId()>0){
                $backup->delete();
            }
            $block->setIdentifier($data['identifier'].'-backup')->setActive(0)->save();
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
