<?php
$I = new WebGuy($scenario);
$I->wantTo('see author name and email');
$I->amOnPage('/web/contact');
$I->see($author);
$I->see($author_mail);
