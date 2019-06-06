<?php

namespace Tests\Unit;

use App\Company;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    /**
     * @test
     * Check for human-readability of period started on.
     *
     * @return void
     */
    public function check_human_datetime_output()
    {
        // Create a Company record
        $company = $this->newCompany();

        // Assert datetime output
        $this->assertEquals('01 Jun 2019, 16:45:00', $company->humanPeriodStartedOn());
        $this->assertEquals('01 Jun 2019, 16:45:00', $company->humanPeriodEndedOn());
    }

    /**
     * Returns a newly created Company record.
     *
     * @return App\Company
     */
    private function newCompany()
    {
        return factory(Company::class)->create([
            'company_title' => 'Company A',
            'company_code' => 'A',
            'period_started_on' => '2019-06-01 16:45:00',
            'period_ended_on' => '2019-06-01 16:45:00',
            'created_at' => '2019-06-01 16:45:00',
            'updated_at' => '2019-06-01 16:45:00'
        ]);
    }
}
