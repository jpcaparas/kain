<?php


class ContactModelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $contact;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $establishment;

    protected function _before()
    {
        $this->contact = App\Models\Contact::class;
        $this->establishment = \App\Models\Establishment::class;
    }

    protected function _after()
    {
    }

    public function testCrud()
    {
        $this->tester->wantTo('test create, read, update, delete capabilities of a contact entry');

        $this->tester->amGoingTo('create record');

        $record = $this->tester->have($this->contact, [
            'address' => 'Textile Centre',
            'address2' => '117 St. Georges Bay Road.',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'region' => 'Auckland',
            'postcode' => '1011',
            'latitude' => '-36.850827',
            'longitude' => '174.782576',
            'phone_landline' => '09 353 1234',
            'phone_mobile' => '027 373 1386',
            'contactable_id' => 1,
            'contactable_type' => $this->establishment,
        ]);

        $this->tester->amGoingTo('read record');
        $this->tester->canSeeRecord($this->contact, [
            'address' => 'Textile Centre',
            'address2' => '117 St. Georges Bay Road.',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'region' => 'Auckland',
            'postcode' => '1011',
            'latitude' => '-36.850827',
            'longitude' => '174.782576',
            'phone_landline' => '09 353 1234',
            'phone_mobile' => '027 373 1386',
            'contactable_id' => 1,
            'contactable_type' => $this->establishment,
        ]);

        $this->tester->amGoingTo('update record');
        $record->address = 'Textile Centre (updated location)';
        $record->save();
        $this->tester->canSeeRecord($this->contact, [
            'address' => 'Textile Centre (updated location)',
            'address2' => '117 St. Georges Bay Road.',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'region' => 'Auckland',
            'postcode' => '1011',
            'latitude' => '-36.850827',
            'longitude' => '174.782576',
            'phone_landline' => '09 353 1234',
            'phone_mobile' => '027 373 1386',
            'contactable_id' => 1,
            'contactable_type' => $this->establishment,
        ]);

        $this->tester->amGoingTo('delete record');
        $record->delete();
        $this->tester->cantSeeRecord($this->contact, [
            'address' => 'Textile Centre (updated location)',
            'address2' => '117 St. Georges Bay Road.',
            'suburb' => 'Parnell',
            'city' => 'Auckland City',
            'region' => 'Auckland',
            'postcode' => '1011',
            'latitude' => '-36.850827',
            'longitude' => '174.782576',
            'phone_landline' => '09 353 1234',
            'phone_mobile' => '027 373 1386',
            'contactable_id' => 1,
            'contactable_type' => $this->establishment,
        ]);

    }
}