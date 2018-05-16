<?php
use Cake\Core\Configure;

if (!Configure::check('Solidus.currency')) {
    Configure::write('Solidus.currency', 'USD');
}