<?php


class EstablishmentApiCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    public function tryToTestIndexAction(FunctionalTester $I)
    {
        $I->wantToTest('if the index action returns a JSON response');

        $I->comment('the response is valid');
        $I->sendGET('/api/establishments');
        $I->seeResponseCodeIs(200);
        $I->canSeeResponseIsJson();

        $I->comment('the first record contains expected keys');
        $response = $I->grabResponse();
        $I->assertInternalType('string', $response);
        $responseArray = json_decode($response, true);
        $I->assertInternalType('array', $responseArray);
        $I->assertArrayHasKey('data', $responseArray);
        $record = $responseArray['data'][0];
        $I->assertArrayHasKey('id', $record);
        $I->assertArrayHasKey('name', $record);
        $I->assertArrayHasKey('deleted_at', $record);
        $I->assertArrayHasKey('created_at', $record);
        $I->assertArrayHasKey('updated_at', $record);
    }

    public function tryToTestShowAction(FunctionalTester $I)
    {
        $I->wantToTest('if the show action returns a JSON response');

        $I->comment('the response is valid');
        $I->sendGET('/api/establishments/1');
        $I->seeResponseCodeIs(200);
        $I->canSeeResponseIsJson();

        $I->comment('the first record contains expected keys');
        $response = $I->grabResponse();
        $I->assertInternalType('string', $response);
        $record = json_decode($response, ARRAY_FILTER_USE_KEY);
        $I->assertInternalType('array', $record);
        $I->assertArrayHasKey('id', $record);
        $I->assertArrayHasKey('name', $record);
        $I->assertArrayHasKey('contact', $record);
        $I->assertArrayHasKey('deleted_at', $record);
        $I->assertArrayHasKey('created_at', $record);
        $I->assertArrayHasKey('updated_at', $record);
    }
}
