<?php

namespace Tests\Unit\Network\Validators;

use Getapp\Network\Validator\Origin;
use PHPUnit\Framework\TestCase;
use Utopia\Database\Helpers\ID;

class OriginTest extends TestCase
{
    public function testValues(): void
    {
        $validator = new Origin([
            [
                '$collection' => ID::custom('platforms'),
                'name' => 'Production',
                'type' => Origin::CLIENT_TYPE_WEB,
                'hostname' => 'appwrite.io',
            ],
            [
                '$collection' => ID::custom('platforms'),
                'name' => 'Development',
                'type' => Origin::CLIENT_TYPE_WEB,
                'hostname' => 'appwrite.test',
            ],
            [
                '$collection' => ID::custom('platforms'),
                'name' => 'Localhost',
                'type' => Origin::CLIENT_TYPE_WEB,
                'hostname' => 'localhost',
            ],
            [
                '$collection' => ID::custom('platforms'),
                'name' => 'Flutter',
                'type' => Origin::CLIENT_TYPE_FLUTTER_WEB,
                'hostname' => 'appwrite.flutter',
            ],
        ]);

        $this->assertEquals($validator->isValid('https://localhost'), true);
        $this->assertEquals($validator->isValid('http://localhost'), true);
        $this->assertEquals($validator->isValid('http://localhost:80'), true);

        $this->assertEquals($validator->isValid('https://appwrite.io'), true);
        $this->assertEquals($validator->isValid('http://appwrite.io'), true);
        $this->assertEquals($validator->isValid('http://appwrite.io:80'), true);

        $this->assertEquals($validator->isValid('https://appwrite.test'), true);
        $this->assertEquals($validator->isValid('http://appwrite.test'), true);
        $this->assertEquals($validator->isValid('http://appwrite.test:80'), true);

        $this->assertEquals($validator->isValid('https://appwrite.flutter'), true);
        $this->assertEquals($validator->isValid('http://appwrite.flutter'), true);
        $this->assertEquals($validator->isValid('http://appwrite.flutter:80'), true);

        $this->assertEquals($validator->isValid('https://example.com'), false);
        $this->assertEquals($validator->isValid('http://example.com'), false);
        $this->assertEquals($validator->isValid('http://example.com:80'), false);

        $this->assertEquals($validator->isValid('getapp-ios://com.company.appname'), false);
        $this->assertEquals($validator->getDescription(), 'Invalid Origin. Register your new client (com.company.appname) as a new iOS platform on your project console dashboard');

        $this->assertEquals($validator->isValid('getapp-android://com.company.appname'), false);
        $this->assertEquals($validator->getDescription(), 'Invalid Origin. Register your new client (com.company.appname) as a new Android platform on your project console dashboard');

        $this->assertEquals($validator->isValid('getapp-macos://com.company.appname'), false);
        $this->assertEquals($validator->getDescription(), 'Invalid Origin. Register your new client (com.company.appname) as a new macOS platform on your project console dashboard');

        $this->assertEquals($validator->isValid('getapp-linux://com.company.appname'), false);
        $this->assertEquals($validator->getDescription(), 'Invalid Origin. Register your new client (com.company.appname) as a new Linux platform on your project console dashboard');

        $this->assertEquals($validator->isValid('getapp-windows://com.company.appname'), false);
        $this->assertEquals($validator->getDescription(), 'Invalid Origin. Register your new client (com.company.appname) as a new Windows platform on your project console dashboard');
    }
}
