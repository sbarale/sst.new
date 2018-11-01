<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BathwrapsOneTest extends DuskTestCase
{

    public function testFormWorks()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/remodeling/bath/1?debug=1')
                    ->assertSee('DEBUG MODE ON')
                    ->assertDontSee('Please enter the street address of the home')
                    ->type('zip_code', '91361')
                    ->press('#btn_continue')
                    ->assertSee('Please enter the street address of the home')
                    ->type('address', '160 W Camino Real, #608')
                    ->press('#btn_continue2')
                    ->assertSee('Last Step')
                    ->type('#first_name', 'Sebas')
                    ->type('#last_name', 'Inar')
                    ->type('#phone_home', '8188888888')
                    ->type('#email_address', 'ss@ss.com')
                    ->press('#btn_submit')
                    ->assertSee('Array')
                    ->assertSee('5b6313889dc73')
                    ->assertSee('fxYHVwbMWT4t2By6mpn8')
                    ->assertSee('ss@ss.com')
                    ->assertSee('Sebas')
                    ->assertSee('Inar')
                    ->assertSee('8188888888')
                    ->assertSee('ss@ss.com')
                    ->assertSee('160 W Camino Real, #608')
                    ->assertSee('91361'); // <-- In the good forms, this should be replaced by google's autocomplete to the correct one

        });
    }
}
