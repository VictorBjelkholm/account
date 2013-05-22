<?php
$I = new WebGuy($scenario);
$I->wantTo('perform actions and see result');
$I->see('A Framework For Web Artisans');

$I->click('Official Website');

$I->see('INCREDIBLY WELL DOCUMENTED');