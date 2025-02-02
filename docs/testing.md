# Testing

When performing [HTTP testing](https://codeigniter.com/user_guide/testing/feature.html) in your applications, you 
will often need to ensure you are logged in to check security, or simply to access protected locations. Shield
provides the `AuthenticationTesting` trait which to help you out.

```php
<?php

use Sparks\Shield\Test\AuthenticationTesting;
use Tests\Support\TestCase;

class ActionsTest extends TestCase
{
    use DatabaseTestTrait;
	use FeatureTestTrait;
	use AuthenticationTesting;

    public function testEmail2FAShow()
    {
        $result = $this->actingAs($this->user)
           ->withSession([
               'auth_action' => \Sparks\Shield\Authentication\Actions\Email2FA::class,
           ])->get('/auth/a/show');
    
        $result->assertStatus(200);
        // Should auto-populate in the form
        $result->assertSee($this->user->email);
    }
}
```
