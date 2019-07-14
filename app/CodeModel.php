<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CodeModel extends Model
{
    /**
     * @param null $separator
     * @return array|string
     */
    public function years($separator = null)
    {
        $years = Year::all()->sortBy('title_year');
        $ids = [];
        foreach ($years as $year)
        {
            $ids[] = $year->id;
        }

        return $separator ? implode($separator, $ids) : $ids;
    }

    /**
     * @param null $separator
     * @return array|string
     */
    public function companies($separator = null)
    {
        $companies = Company::all()->sortBy('title_company');
        $codes = [];
        foreach ($companies as $company) {
            $codes[] = $company->code_company;
        }

        return $separator ? implode($separator, $codes) : $codes;
    }

    /**
     * @param null $separator
     * @return array|string
     */
    public function dayTypes($separator = null)
    {
        $dayTypes = DayType::all()->sortBy('title_type');
        $codes = [];
        foreach ($dayTypes as $dayType) {
            $codes[] = $dayType->code_type;
        }

        return $separator ? implode($separator, $codes) : $codes;
    }

    /**
     * @param null $separator
     * @return array|string
     */
    public function projects($separator = null)
    {
        $projects = Project::all()->sortBy('title_project');
        $codes = [];
        foreach ($projects as $project) {
            $codes[] = $project->code_project;
        }

        return $separator ? implode($separator, $codes) : $codes;
    }

    /**
     * @param null $separator
     * @return array|string
     */
    public function dbLogActions($separator = null)
    {
        $logActions = LogAction::all()->sortBy('title_action');
        $codes = [];
        foreach ($logActions as $logAction) {
            $codes[] = $logAction->code_action;
        }

        return $separator ? implode($separator, $codes) : $codes;
    }
}
