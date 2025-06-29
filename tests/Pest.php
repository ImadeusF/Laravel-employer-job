<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/*
|--------------------------------------------------------------------------
| Pest Configuration
|--------------------------------------------------------------------------
|
| Here you may configure your Pest environment.
|
*/

uses(TestCase::class)->in('Feature', 'Unit');

// Optionnel : reset la base de données dans tous tes tests Feature
uses(RefreshDatabase::class)->in('Feature');
