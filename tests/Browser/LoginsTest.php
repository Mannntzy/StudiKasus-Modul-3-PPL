<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginsTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @Group Logins
     */
    public function testLoginPages(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee(text: 'Enterprise Application Development') 
            ->clickLink(link: 'Login')
            ->assertPathIs(path: '/Login')
            ->type(field:'email',value:'user1@gmail.com')
            ->type(field:'password',value:'12345')
            ->press(button: 'LOG IN')
            ->assertPathIs('/dashboard');
        });
    }
}
