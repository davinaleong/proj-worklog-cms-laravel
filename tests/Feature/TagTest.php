<?php

namespace Tests\Feature;

use App\Company;
use App\Project;
use App\Year;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class TagTest extends TestCase
{
    /**
     * @test
     * User can access Tags page.
     *
     * @return void
     */
    public function user_can_access_tags_page()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Attempt to access tags page
        $response = $this->get(route('tag.index'));

        // Assert for OK response
        $response->assertStatus(200);

        // Assert for the 'Edit' button on Tags page
        $response->assertSeeText('Edit');
    }

    /**
     * @test
     * Guest gets redirected out of Tags page.
     *
     * @return void
     */
    public function guest_cannot_access_tags_page()
    {
        $this->withoutExceptionHandling();

        // Expect a validation to exception to be thrown
        $this->expectException(\Illuminate\Auth\AuthenticationException::class);

        // Attempt to access tags page
        $response = $this->get(route('tag.edit'));

        // Assert for REDIRECT response
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_can_access_edit_tags_page()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Attempt to access edit tags form
        $response = $this->get(route('tag.edit'));

        // Assert for OK response
        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function guest_cannot_access_edit_tags_page()
    {
        $this->withoutExceptionHandling();

        // Expect a validation to exception to be thrown
        $this->expectException(\Illuminate\Auth\AuthenticationException::class);

        // Attempt to go to edit tags form
        $response = $this->get(route('tag.edit'));

        // Assert for REDIRECT response
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_submits_companies_form()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Declare attributes
        $attributes = [
            'count' => 2,
            'model' => 'Company',
            'company[1][title]' => 'Company A',
            'company[1][code]' => 'A',
            'company[1][period_started_on]' => '01-06-2019 08:00:00',
            'company[1][period_ended_on]' => null,
            'company[2][title]' => 'Company B',
            'company[2][code]' => 'B',
            'company[2][period_started_on]' => '01-06-2019 08:00:00',
            'company[2][period_ended_on]' => null
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_submits_projects_form()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Declare attributes
        $attributes = [
            'count' => 2,
            'model' => 'Project',
            'project[1][title]' => 'Project A',
            'project[1][code]' => 'A',
            'project[2][title]' => 'Project B',
            'project[2][code]' => 'B'
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_submits_year_form()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $user = factory(User::class)->create();

        // Declare form attributes
        $attributes = [
            'count' => 2,
            'model' => 'Year',
            'year[1][title]' => '2020',
            'year[2][title]' => '2015'
        ];

        // Attempt to submit form
        $response = $this->actingAs($user)
            ->withSession(['foo' => 'bar'])
            ->put(route('tag.update'), $attributes);

        // Assert a REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_submits_daytypes_form()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Declare attributes
        $attributes = [
            'count' => 1,
            'model' => 'DayType',
            'daytype[1][title]' => 'Flag Day',
            'daytype[1][code]' => 'F',
            'daytype[1][icon_fa]' => 'fas fa-fw fa-flag',
            'daytype[1][color_hex]' => '#888888'
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

}
