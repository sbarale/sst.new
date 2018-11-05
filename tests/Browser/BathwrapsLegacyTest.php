<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BathwrapsLegacyTest extends DuskTestCase
{
    /**
     * @throws \Throwable
     */
    public function testLegacyPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/legacy/bath/')
                    ->assertSee('Bathroom Remodeling');
        });
    }
}
