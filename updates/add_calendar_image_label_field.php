<?php namespace Kilfedder\GoogleCalendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCalendarImageLabelField extends Migration
{

    public function up()
    {
        Schema::table('kilfedder_googlecalendar_calendar_images', function ($table) {
            $table->engine = 'InnoDB';
            $table->char('label', 255);
            $table->dropColumn(['image']);
        });
    }


}
