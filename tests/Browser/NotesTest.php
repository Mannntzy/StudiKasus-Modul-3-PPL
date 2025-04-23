<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', value: 'Hilman')
                    ->type('email', value: 'user@gmail.com')
                    ->type('password', value: '12345')
                    ->type('confirm password', value: '12345')
                    ->press(button: 'REGISTER')
                    ->assertPathIs(path: '/dashboard');
        });
    }
}
