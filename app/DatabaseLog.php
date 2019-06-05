<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LogAction;

class DatabaseLog extends Model
{
    public const UPDATED_AT = null;

    /**
     * Returns the user associated with the database log.
     *
     * @return App\User
     */
    public function user()
    {
        return User::findOrFail($this->attributes['user_id']);
    }

    /**
     * Formats the sources column into a human-readable format.
     *
     * @return string
     */
    public function humanSources()
    {
        // Decode the json sources attribute
        $sources = json_decode($this->attributes['sources'], true);

        // Initialise the output
        $output = '';

        // Loop through the sources to construct the output string
        foreach ($sources as $source) {
            // Concatenate the source table
            $output .= $source['source'].'/';

            if (count($source['ids']) > 1) {
                // Concatenate <first-element>-<last-element> if
                // there are many elements in the 'ids' field
                $firstElement = $source['ids'][0];
                $lastElement = $source['ids'][count($source['ids']) - 1];

                $output .= $firstElement.'-'.$lastElement;
            } else {
                // Simply concatenate the ids if it has only one element
                $output .= $source['ids'][0];
            }

            // Concatenate the separator
            $output .= ',';
        }

        // Return the generated output
        return $output;
    }

    /**
     * Returns the name of the action enum.
     *
     * @return string
     */
    public function nameAction()
    {
        $logActions = LogAction::where('action_code', '=', $this->attributes['action'])->get();

        if (count($logActions) > 0) {
            return $logActions[0]->name;
        }

        return '';
    }
}
