<?php
/**
 * Created by PhpStorm.
 * User: giantjelly
 * Date: 01/08/2017
 * Time: 14:55
 */

namespace Application\Block\ProductCta;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Legacy\BlockRecord;
use Concrete\Core\Page\Page;
use Database;
use Config;
use Events;

class Controller extends BlockController
{
    protected $btTable = 'bt_product_cta';
    protected $btInterfaceWidth = "800";
    protected $btInterfaceHeight = "350";

    public $helpers = array('form');

    public function getBlockTypeDescription()
    {
        return t("The product cta block");
    }

    public function getBlockTypeName()
    {
        return t("Product Cta");
    }

    public function save($args)
    {
        if ($this->btTable) {
            $db = Database::connection();
            $columns = $db->MetaColumnNames($this->btTable);
            $this->record = new BlockRecord($this->btTable);
            $this->record->bID = $this->bID;
            foreach ($columns as $key) {
                if (isset($args[$key])) {
                    $this->record->{$key} = $args[$key];
                }
            }
            $this->record->Replace();
            if ($this->cacheBlockRecord() && Config::get('concrete.cache.blocks')) {
                $record = base64_encode(serialize($this->record));
                $db = Database::connection();
                $db->Execute('UPDATE Blocks SET btCachedBlockRecord = ? WHERE bID = ?', [$record, $this->bID]);
            }
        }
    }

    public function load()
    {
        if ($this->btTable) {
            if ($this->btCacheBlockRecord && $this->btCachedBlockRecord && Config::get('concrete.cache.blocks')) {
                $this->record = unserialize(base64_decode($this->btCachedBlockRecord));
            } else {
                $this->record = new BlockRecord($this->btTable);
                $this->record->bID = $this->bID;
                $this->record->Load('bID=' . $this->bID);
                if ($this->btCacheBlockRecord && Config::get('concrete.cache.blocks')) {
                    // this is the first time we're loading
                    $record = base64_encode(serialize($this->record));
                    $db = Database::connection();
                    $db->Execute('UPDATE Blocks SET btCachedBlockRecord = ? WHERE bID = ?', [$record, $this->bID]);
                }
            }
        }

        $event = new \Symfony\Component\EventDispatcher\GenericEvent();
        $event->setArgument('record', $this->record);
        $event->setArgument('btHandle', $this->btHandle);
        $event->setArgument('bID', $this->bID);
        $ret = Events::dispatch('on_block_load', $event);
        $this->record = $ret->getArgument('record');

        if (is_object($this->record)) {
            foreach ($this->record as $key => $value) {
                $this->{$key} = $value;
                $this->set($key, $value);
            }
        }
    }
}
