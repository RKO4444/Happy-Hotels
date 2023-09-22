<?php

namespace Tests\Feature;
use App\Models\Customer;
use App\Models\User;
use Tests\TestCase;


class CreateCustomerTest extends TestCase
{
  

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCustomerCanBeCreated()
    {
       $users= User::where('name','user1')->first();
       $this->assertDatabaseHas('users', [
        'name' => 'user1',
        'email' => 'user1@gmail.com',
    ]);

      // Retrieve the user from the database
      $retrievedUser = User::where('email', 'user1@gmail.com')->first();

      // Assert that the retrieved user matches the created user
      $this->assertEquals($users->name, $retrievedUser->name);
      $this->assertEquals($users->email, $retrievedUser->email);
    }
}


