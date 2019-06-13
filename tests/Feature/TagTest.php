<?php

namespace Tests\Feature;

use App\Company;
use App\Project;
use App\Year;
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
    public function user_successfully_submits_year_form()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Declare form attributes
        $attributes = [
            'year[1][title]' => '2020',
            'year[2][title]' => '2015'
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert a REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_deletes_a_year_record()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Create some Year records
        factory(Year::class)->create();

        // Declare form attributes
        $attributes = [
            'year1-remove' => 'remove'
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
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
            'new0-title_company' => 'Company A',
            'new0-code_company' => 'A',
            'new0-period_started_on' => '01-06-2019 08:00:00',
            'new0-period_ended_on' => null,
            'new1-title_company' => 'Company B',
            'new1-code_company' => 'B',
            'new1-period_started_on' => '01-06-2019 08:00:00',
            'new1-period_ended_on' => null
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_deletes_a_company_record()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Create some Company records
        factory(Company::class)->create();

        // Declare attributes
        $attributes = [
            'company1-remove' => 'remove'
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
            'new0-title_project' => 'Project A',
            'new0-code_project' => 'A',
            'new1-title_project' => 'Project B',
            'new1-code_project' => 'B'
        ];

        // Attempt to submit form
        $response = $this->put(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_deletes_a_project()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Create a Project record
        factory(Project::class)->create([
            'title_project' => 'Fun Project',
            'code_project' => 'FUN'
        ]);

        // Declare attributes
        $attributes = [
            'project1-remove' => 'remove'
        ];

        // Attempt to submit form
        $response = $this->get(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
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
            'new0-title_type' => 'Flag Day',
            'new0-code_type' => 'F',
            'new0-icon_fa' => 'fas fa-fw fa-flag',
            'new0-color-hex' => '#888888'
        ];

        // Attempt to submit form
        $response = $this->get(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_deletes_a_daytype()
    {
        $this->withoutExceptionHandling();

        // Sign in
        $this->actingAs(factory(User::class)->create());

        // Create a Project record
        factory(DayType::class)->create([
            'title_type' => 'Flag Day',
            'code_type' => 'F',
            'icon_fa' => 'fas fa-fw fa-flag',
            'color_hex' => '#888888'
        ]);

        // Declare attributes
        $attributes = [
            'daytype1-remove' => 'remove'
        ];

        // Attempt to submit form
        $response = $this->get(route('tag.update'), $attributes);

        // Assert for REDIRECT response to indicate successful form submission
        $response->assertStatus(302);
    }
}
