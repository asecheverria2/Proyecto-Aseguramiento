<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('email', 'jhguanochanga@espe.edu.ec')
                    ->type('password', '12345678')
                    ->click('button[type="submit"]')
                    ->assertSee('Bienvenido');
        });
    }
}
