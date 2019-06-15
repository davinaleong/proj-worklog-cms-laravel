<?php

namespace Tests\Feature;

use App\Log;
use App\LogEntry;
use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkLogTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function user_can_access_logs_page()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $response = $this->get(route('logs.index'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function guest_cannot_access_logs_page()
    {
        $this->withoutExceptionHandling();

        $this->expectException(\Illuminate\Auth\AuthenticationException::class);

        $this->get(route('logs.index'));
    }

    /**
     * @test
     */
    public function user_can_access_new_logs_page()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $response = $this->get(route('logs.create'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function guest_cannot_access_logs_new_page()
    {
        $this->withoutExceptionHandling();

        $this->expectException(\Illuminate\Auth\AuthenticationException::class);

        $this->get(route('logs.create'));
    }

    /**
     * @test
     */
    public function user_successfully_submits_new_log_form()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $attributes = [
            'title' => 'Week1',
            'entry[0][title]' => 'Jan 01',
            'entry[0][type]' => 'W',
            'entry[0][item][0][title]' => 'Item 1',
            'entry[0][item][0][project_code]' => 'TEST',
            'entry[0][item][1][title]' => 'Item 2',
            'entry[0][item][1][project_code]' => 'TEST',
            'entry[0][item][2][title]' => 'Item 3',
            'entry[0][item][2][project_code]' => 'TEST',
            'entry[1][title]' => 'Jan 02',
            'entry[1][type]' => 'W',
            'entry[1][item][0][title]' => 'Item 1',
            'entry[1][item][0][project_code]' => 'TEST',
            'entry[1][item][1][title]' => 'Item 2',
            'entry[1][item][1][project_code]' => 'TEST',
            'entry[1][item][2][title]' => 'Item 3',
            'entry[1][item][2][project_code]' => 'TEST',
        ];

        $response = $this->post(route('logs.store', $attributes));

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_can_access_edit_logs_page()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $response = $this->get(route('log.edit'));

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function guest_cannot_access_edit_logs_page()
    {
        $this->withoutExceptionHandling();

        $this->expectException(\Illuminate\Auth\AuthenticationException::class);

        $this->get(route('log.edit'));
    }

    /**
     * @test
     */
    public function user_successfully_submits_edit_form()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create());

        $attributes = [
            'id' => 1,
            'title' => 'Week1',
            'entry[0][title]' => 'Jan 01',
            'entry[0][type]' => 'W',
            'entry[0][item][0][title]' => 'Item 1',
            'entry[0][item][0][project_code]' => 'TEST',
            'entry[0][item][1][title]' => 'Item 2',
            'entry[0][item][1][project_code]' => 'TEST',
            'entry[0][item][2][title]' => 'Item 3',
            'entry[0][item][2][project_code]' => 'TEST',
            'entry[1][title]' => 'Jan 02',
            'entry[1][type]' => 'W',
            'entry[1][item][0][title]' => 'Item 1',
            'entry[1][item][0][project_code]' => 'TEST',
            'entry[1][item][1][title]' => 'Item 2',
            'entry[1][item][1][project_code]' => 'TEST',
            'entry[1][item][2][title]' => 'Item 3',
            'entry[1][item][2][project_code]' => 'TEST',
        ];

        $response = $this->put(route('log.update', $attributes));

        $response->assertStatus(302);
    }

    /**
     * @test
     */
    public function user_successfully_deletes_a_log()
    {
        $this->withoutExceptionHandling();

        $this->createLog();

        $this->actingAs(factory(User::class)->create());

        $response = $this->delete(route('log.delete', ['id' => 1]));

        $response->assertStatus(302);
    }

    private function createLog()
    {
        $log = factory(Log::class)->create();
        $entries = factory(LogEntry::class)->create();
        $items = factory(EntryItem::class)->create();

        return [
            'log' => $log,
            'entries' => $entries,
            'items' => $items
        ];
    }
}
