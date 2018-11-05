<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BathwrapsTwoTest extends DuskTestCase
{

    public function testFormWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/remodeling/bath/2?debug=1&rid=123123')
                    ->assertSee('DEBUG MODE ON')
                    ->assertDontSee('Please enter the street address of the home')
                    ->type('zip_code', '91361')
                    ->press('Next')
                    ->waitFor('#address_slide')
                    ->assertSee('Please enter the street address of the home')
                    ->type('address_mask', '160 W Camino Real')
                    ->waitFor('.pac-container', 2)
                    ->keys('#address_mask', '{ARROW_DOWN}')
                    ->keys('#address_mask', '{ENTER}')
                    ->waitUntilMissing('.pac-container')
                    ->pause(2000)
                    ->click('.btn-page2')
                    ->pause(2000)
                    ->assertSee('Please Fill Out Information Below so You Can Receive Your Results')
                    ->type('first_name', 'Sebas')
                    ->click('#last_name')
                    ->type('last_name', 'Inar')
                    ->click('#email')
                    ->type('email_address', 'ss@ss.com')
                    ->type('phone_home', '8188888888')
                    ->waitFor('.btn-page3')
                    ->press('GET MATCHES')
                    ->waitForReload();

            $browser->with('#posting', function ($b) {
                $b->assertInputValue('lp_campaign_id', '5b6313889dc73')
                  ->assertInputValue('lp_campaign_key', 'fxYHVwbMWT4t2By6mpn8')
                  ->assertInputValue('lp_request_id', '123123')
                  ->assertInputValue('ip_address', '127.0.0.1')
                  ->assertInputValue('landing_page_url', '/remodeling/bath/2')
                  ->assertInputValueIsNot('universal_leadid', '')
                  ->assertInputValue('email_address', 'ss@ss.com')
                  ->assertInputValue('first_name', 'Sebas')
                  ->assertInputValue('last_name', 'Inar')
                  ->assertInputValue('phone_home', '(818) 888-8888')
                  ->assertInputValue('email_address', 'ss@ss.com')
                  ->assertInputValue('address', '160 W Camino Real, Boca Raton, FL 33432, USA')
                  ->assertInputValue('zip_code', '33432'); // <-- In the good forms, this should be replaced by google's autocomplete to the correct one
            });
        });
    }
}
