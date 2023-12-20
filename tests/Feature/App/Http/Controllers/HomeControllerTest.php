<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
	
	public function test_home_page_success(): void
	{
		$response = $this->get('/');

		$response->assertOk();
	}

}
