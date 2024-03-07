<?php
include_once('Parents/IncludeItems.php');
include_once('Parents/IncludeBlocks.php');
include_once('./Hotbar.php');

$hotbar = new Hotbar();

$block = new Wood();

$tool = new Axe();
$tool->initializeTool(Materials::DIAMOND);

$block->destroyBlock($tool);