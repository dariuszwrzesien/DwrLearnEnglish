<?php
$I = new WebGuy($scenario);
$I->wantTo('see email adress belongs to contact person');
$I->amOnPage('/web/contact');
$I->see('dariuszwrzesien@gmail.com');
