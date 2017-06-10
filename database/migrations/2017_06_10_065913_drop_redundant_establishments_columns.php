<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Drops columns that have been moved to App\Models\Contact
 *
 * Class DropRedundantEstablishmentsColumns
 */
class DropRedundantEstablishmentsColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establishments', function (Blueprint $table) {
            $table->dropColumn(['address', 'address2', 'suburb', 'postcode', 'city', 'phone']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * SQLite requires a default value for not-null columns
     *
     * @see https://laracasts.com/discuss/channels/general-discussion/migrations-sqlite-general-error-1-cannot-add-a-not-null-column-with-default-value-null
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establishments', function (Blueprint $table) {
            $table->string('address')->default('');
            $table->string('address2')->default('');
            $table->string('suburb')->default('');
            $table->string('postcode')->default('');
            $table->string('city')->default('');
            $table->string('phone')->default('');
        });
    }
}
