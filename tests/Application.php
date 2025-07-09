<?php

namespace Riftfox\Wechat\Application\tests;

use Riftfox\Wechat\Application\ApplicationEncryptionModeLabelTrait;
use Riftfox\Wechat\Application\ApplicationInterface;
use Riftfox\Wechat\Application\ApplicationTypeLabelTrait;

class Application implements ApplicationInterface
{
    use ApplicationEncryptionModeLabelTrait;
    use ApplicationTypeLabelTrait;

    private $appId;
    private $appSecret;
    private $token;
    private $type;
    private $encodingAesKey;
    private $encryptionMode;

    public function __construct(string $appId, string $appSecret, string $type)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->type = $type;
    }

    public function getAppId()
    {
        // TODO: Implement getAppId() method.
        return $this->appId;
    }

    public function getAppSecret()
    {
        // TODO: Implement getAppSecret() method.
        return $this->appSecret;
    }

    public function getToken()
    {
        // TODO: Implement getToken() method.
        return $this->token;
    }

    public function getType()
    {
        // TODO: Implement getType() method.
        return $this->type;
    }

    public function getEncodingAesKey()
    {
        // TODO: Implement getEncodingAesKey() method.
        return $this->encodingAesKey;
    }

    public function getEncryptionMode()
    {
        // TODO: Implement getEncryptionMode() method.
        return $this->encryptionMode;
    }
}