<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BathwrapsTwoTest extends DuskTestCase
{

    public function testPageLoads()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/remodeling/bath/2')
                    ->assertSee('1 DAY BATHROOM REMODELS');
        });
    }

    public function testDebugWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/remodeling/bath/2?debug=1')
                    ->assertSee('DEBUG MODE ON');
        });
    }

    public function testFormWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/remodeling/bath/2?debug=1')
                    ->assertSee('DEBUG MODE ON')
                    ->assertDontSee('Please enter the street address of the home')
                    ->type('zip_code', '91361')
                    ->pressAndWaitFor('.btn-page1', 3)
                    ->assertSee('Please enter the street address of the home')
                    ->type('address_mask', '160 W Camino Real')
                    ->waitFor('.pac-container', 2)
                    ->keys('#address_mask', '{ARROW_DOWN}')
                    ->keys('#address_mask', '{ENTER}')
                    ->waitUntilMissing('.pac-container')
                    ->waitFor('.btn-page2')
                    ->press('.btn-page2')
                    ->assertSee('Please Fill Out Information Below so You Can Receive Your Results')
                    ->type('first_name', 'Sebas')
                    ->type('last_name', 'Inar')
                    ->type('email_address', 'ss@ss.com')
                    ->type('phone_home', '8188888888')
                    ->waitFor('.btn-page3', 2)
                    ->press('.btn-page3')
                    ->waitForReload()
                    ->assertSee('Array')
                    ->assertSee('5b6313889dc73')
                    ->assertSee('fxYHVwbMWT4t2By6mpn8')
                    ->assertSee('ss@ss.com')
                    ->assertSee('Sebas')
                    ->assertSee('Inar')
                    ->assertSee('8188888888')
                    ->assertSee('ss@ss.com')
                    ->assertSee('160 W Camino Real, Boca Raton, FL 33432, USA')
                    ->assertSee('33432'); // <-- In the good forms, this should be replaced by google's autocomplete to the correct one

        });
    }
}
