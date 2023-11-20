<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_Halaman_Register(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    // RegisterTest.php

    use RefreshDatabase;

    public function testUserRegistration()
    {
        $response = $this->post('/simpandata', [
            'Nama' => 'John Doe',
            'NIM' => '123456789',
            'Nomor_Telepon' => '1234567890',
            'Kelas/Prodi' => 'Computer/Science',
            'Email' => 'john.doe@example.com',
            'Password' => 'password123',
        ]);
        $response->assertStatus(200); 

    // Assuming a redirect on successful registration
        // You might want to add more assertions based on your application's behavior.
    }
}


