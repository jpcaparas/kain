<?php


class EstablishmentModelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $establishment;

    protected function _before()
    {
        $this->establishment = App\Models\Establishment::class;
    }

    protected function _after()
    {
    }

    public function testCrud()
    {
        $this->tester->wantTo('test create, read, update, delete capabilities of an establishment');

        $this->tester->amGoingTo('create record');
        $record = $this->tester->have($this->establishment, [
            'name' => 'Pixel Foods, Inc.',
            'address' => 'Textile Centre',
            'address2' => '117 St. Georges Bay Road',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'phone' => '09-353 1234'
        ]);

        $this->tester->amGoingTo('read record');
        $this->tester->canSeeRecord($this->establishment, [
            'name' => 'Pixel Foods, Inc.',
            'address' => 'Textile Centre',
            'address2' => '117 St. Georges Bay Road',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'phone' => '09-353 1234'
        ]);

        $this->tester->amGoingTo('update record');
        $record->name = 'Pixel Foods, Corp.';
        $record->save();
        $this->tester->canSeeRecord($this->establishment, [
            'name' => 'Pixel Foods, Corp.',
            'address' => 'Textile Centre',
            'address2' => '117 St. Georges Bay Road',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'phone' => '09-353 1234'
        ]);

        $this->tester->amGoingTo('delete record');
        $record->delete();
        $this->tester->cantSeeRecord($this->establishment, [
             'name' => 'Pixel Foods, Corp.',
             'address' => 'Textile Centre',
             'address2' => '117 St. Georges Bay Road',
             'suburb' => 'Parnell',
             'city' => 'Auckland City',
             'phone' => '09-353 1234'
        ]);

    }
}