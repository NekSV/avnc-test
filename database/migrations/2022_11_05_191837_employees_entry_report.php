<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->deleteView());
    }

    private function createView(): string
    {
        return <<<EOD
            CREATE VIEW view_entries_report AS
                SELECT e.employee_code,
                       CONCAT_WS(' ' ,e.first_name, e.last_name) full_name,
                       t.clock_in expected_entry,
                       s.clock_in actual_entry,
                       t.clock_out expected_leave,
                       s.clock_out actual_leave,
                       TIMESTAMPDIFF(MINUTE , t.clock_in, s.clock_in) <= 0 entry_on_time,
                       TIMESTAMPDIFF(MINUTE , t.clock_out, s.clock_out) > 1 leave_on_time
                FROM shifts s
                         inner join employees e on s.employees_id = e.id
                         inner join turns t on e.turns_id = t.id
            EOD;
    }

    private function deleteView(): string
    {
        return <<<EOD
            DROP VIEW IF EXISTS `view_entries_report`;
        EOD;

    }
};
